@extends('master')
@section('head')
Thêm tên miền
@endsection
@section('content')
<div class="mw1000 center-block">

    <!-- -------------- Spec Form -------------- -->
    <div class="allcp-form">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-title">Thêm thông tin tên miền
                </div>
            </div>
            <div class="panel-body">
                <form method="post" action="" id="form-ui">
                    <!-- -------------- Basic -------------- -->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section">
                                <label class="field">
                                    <input type="text" name="from" id="from" class="gui-input"
                                           placeholder="Tên miền">
                                </label>
                            </div>
                        </div>
                      </div>

                    <!-- -------------- Icons -------------- -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="text" name="firstname" id="firstname" class="gui-input"
                                           placeholder="Bộ phận sử dụng">
                                    <label for="firstname" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="email" name="email" id="email" class="gui-input"
                                           placeholder="Email bộ phận sử dụng">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </label>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="url" name="website" id="website" class="gui-input"
                                           placeholder="Tên người quản lý">
                                    <label for="website" class="field-icon">
                                        <i class="fa fa-external-link"></i>
                                    </label>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="section">
                                <label class="field prepend-icon">
                                    <input type="email" name="email" id="email" class="gui-input"
                                           placeholder="Email đăng ký">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-envelope"></i>
                                    </label>
                                </label>
                            </div>
                        </div>
                    </div>


                    <!-- -------------- Text Areas -------------- -->
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section">
                                <label class="field prepend-icon">
            <textarea class="gui-textarea" id="comment" name="comment"
                      placeholder="Ghi chú"></textarea>
                                    <label for="comment" class="field-icon">
                                        <i class="fa fa-list"></i>
                                    </label>
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="section text-right">
                        <button type="submit" class="ph40 btn btn-bordered btn-primary">Thêm</button>
                    </div>



                        </div>
                    </div>
                    <!-- -------------- /section -------------- -->


                </form>
                <!-- -------------- /form -------------- -->
            </div>
        </div>

    </div>

</div>
@endsection
