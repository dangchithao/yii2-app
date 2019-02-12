<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$this->registerCssFile('@web/css/about.css');
$this->registerCssFile('@web/css/template1.css');
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>

    <!-- Large modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
        <div class="modal-dialog modal-lg .modal-dialog-centered" role="document">
            <div class="modal-content">
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">-->
<!--                        <span aria-hidden="true">&times;</span></button>-->
<!--                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>-->
<!--                </div>-->
                <div class="form-search s007">
                    <form>
                        <div class="inner-form">
                            <div class="advance-search">
                                <span class="desc">Tìm kiếm bat cu thu gi theo ý muốn...</span>
                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul" class="text-uppercase">
                                                <option placeholder="" value="">Khu vực</option>
                                                <option>ACCESSORIES</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Trạng thái</option>
                                                <option>Đã bán</option>
                                                <option>Có bán</option>
                                                <option>Không bán</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Loại</option>
                                                <option>Bình thường</option>
                                                <option>Lục đinh</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul" class="text-uppercase">
                                                <option placeholder="" value="">Màu lông</option>
                                                <option>ACCESSORIES</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Trạng đánh</option>
                                                <option>GREEN</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Tuổi</option>
                                                <option>SIZE</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row second">
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Lối đánh</option>
                                                <option>SALE</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Cân nặng</option>
                                                <option>THIS WEEK</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="input-field">
                                        <div class="input-select">
                                            <select data-trigger="" name="choices-single-defaul">
                                                <option placeholder="" value="">Chiến tích</option>
                                                <option>TYPE</option>
                                                <option>SUBJECT B</option>
                                                <option>SUBJECT C</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row third">
                                    <div class="input-field">
                                        <div class="col-md-6">
                                            <button class="btn-search">Tìm kiếm</button>
                                        </div>
                                        <div class="col-md-6">
                                            <button class="btn-close">Đóng</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>-->
<!--                    <button type="button" class="btn btn-primary">Save changes</button>-->
<!--                </div>-->
            </div>
        </div>
    </div>
</div>

<div>
    Shape is: <b><?php echo $shape; ?></b>
</div>

<script src="./js/extention/choices.js"></script>
<script>
    const customSelects = document.querySelectorAll("select");
    const deleteBtn = document.getElementById('delete');
    const choices = new Choices(
        'select',
        {
            searchEnabled: false,
            removeItemButton: true,
            itemSelectText: '',
        }
    );

    for (let i = 0; i < customSelects.length; i++) {
        customSelects[i].addEventListener(
            'addItem',
            function(event) {
                if (event.detail.value) {
                    let parent = this.parentNode.parentNode;

                    parent.classList.add('valid');
                    parent.classList.remove('invalid');
                } else {
                    let parent = this.parentNode.parentNode;
                    parent.classList.add('invalid');
                    parent.classList.remove('valid');
                }
            },
            false
        );
    }

    deleteBtn.addEventListener("click", function(e) {
        e.preventDefault();

        const deleteAll = document.querySelectorAll('.choices__button');

        for (let i = 0; i < deleteAll.length; i++) {
            deleteAll[i].click();
        }
    });
</script>
