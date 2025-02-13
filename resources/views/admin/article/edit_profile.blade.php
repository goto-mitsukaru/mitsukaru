@extends('common.layout')
@include('common.css')
@include('common.menu')
@section('title', 'ARTICLES')
@section('content')
    <div class="main_contents" id="main_contents_profile">
        <h2>- 編集画面 -</h2>
        <div class="frame_wrap">
            <div class="edit_wrap">
                <div class="edit_text_wrap">
                    <form action="/edit_profile/{{$id}}}" method="POST" enctype="multipart/form-data"
                          onSubmit="return check_article()" id="admin_article_form" target="_self">
                        @csrf
                        <div class="photo_frame">
                            <div class="img_item_wrap">
                                <div class="image_input"><span>アイコンを追加</span></div>
                                <div class="image">
                                    <img src="" class="preview">
                                    <div class="hover_menu">
                                        <a href="" class="is_view" target="_blank">閲覧</a>
                                        <span class="is_update">変更</span>
                                        <span class="is_delete">削除</span>
                                        <input type="hidden" name="image_delete_1" class="image_delete"/>
                                    </div>
                                </div>
                                <input type="file" name="image" class="file"/>
                            </div>
                        </div>

                        <label class="title_label" for="edit_title">名前 : </label>
                        <textarea class="edit_area" name="title" id="edit_title"></textarea>

                        <label class="title_label" for="edit_text">紹介文 : </label>
                        <textarea class="edit_area" name="text" id="edit_text" oninput="resizeTextarea()"></textarea>

                        <div class="edit_bottom">
                            <div class="status_wrap">
                                <label class="title_label">公開状況 : </label>
                                <ul>
                                    <li>
                                        <label>
                                            <input type="radio" name="release" value="1">公開
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="radio" name="release" value="0">非公開
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="slug_wrap">
                                <label class="title_label" for="edit_text">スラッグ : </label>
                                <textarea class="edit_area" name="slug" id="edit_slug"></textarea>
                                <p>article/detail/</p>
                            </div>
                        </div>
                        <div class="btn_wrap">
                            <button type="submit" formaction="/article/" formtarget="_self" value="update" name="submit"
                                    class="edit_btn" id="edit_btn">
                                登録
                            </button>
                            <button type="submit" value="delete" name="delete" class="delete_btn"
                                    id="delete_btn">このプロフィールを削除する
                            </button>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/tagsinput.js"></script>
    <script>
        // 画像アップロード
        $(function () {
            $(document).on('click', '.image_input, .is_update', function (e) {
                $(this).closest('.img_item_wrap').find('.file').click();
            });

            $(document).on('click', '.is_delete', function (e) {
                $(this).closest('.img_item_wrap').find('.file').val('');
                $(this).closest('.img_item_wrap').find('.image_input').addClass('active');
                $(this).closest('.img_item_wrap').find('.image').removeClass('active');
                $(this).closest('.img_item_wrap').find('.image_delete').val('true');
            });

            $(function () {
                $('.file').on('change', function () {
                    var self = $(this);

                    //fileの値は空ではなくなるはず
                    if (self.val() !== '') {

                        //propを使って、file[0]にアクセスする
                        var image_ = self.prop('files')[0];

                        //添付されたのが本当に画像かどうか、ファイル名と、ファイルタイプを正規表現で検証する
                        if (!/\.(jpg|jpeg|png|gif|JPG|JPEG|PNG|GIF)$/.test(image_.name) || !/(jpg|jpeg|png|gif)$/.test(image_.type)) {
                            alert('JPG、GIF、PNGファイルの画像を添付してください。');
                            //     //添付された画像ファイルが１M以下か検証する
                        } else if (10485760 < image_.size) {
                            alert('10MB以下の画像を添付してください。');
                        } else {
                            // window.FileReaderに対応しているブラウザどうか
                            if (window.FileReader) {
                                //FileReaderをインスタンス化
                                var reader_ = new FileReader();
                                //添付ファイルの読み込みが成功したときに実行されるイベント（成功時のみ）
                                //一旦飛ばしてreader_ .readAsDataURLが先に動く
                                reader_.onload = function () {
                                    //Data URI Schemeをimgタグのsrcにいれてリアルタイムに添付画像を描画する
                                    self.closest('.img_item_wrap').find('.image_input').removeClass('active');
                                    self.closest('.img_item_wrap').find('.image').addClass('active');
                                    self.closest('.img_item_wrap').find('.preview').attr('src', reader_.result);
                                    self.closest('.img_item_wrap').find('.is_view').attr('href', reader_.result);
                                    self.closest('.img_item_wrap').find('.hover_menu').addClass('store');
                                    self.closest('.img_item_wrap').find('.hover_menu a').hide();
                                    self.closest('.img_item_wrap').find('.image_delete').val('');
                                }
                                //Data URI Schemeを取得する
                                reader_.readAsDataURL(image_);
                            }
                            return false;
                        }
                    }
                    //ダメだったら値をクリアする
                    self.val('');
                });
            });
        });
    </script>
@endsection
