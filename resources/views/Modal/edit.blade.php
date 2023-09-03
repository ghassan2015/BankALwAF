<div class="modal fade" id="edit_Brand_modal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog  modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="edit_exampleModalLabel">تعديل الماركة التجارية </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="needs-validation" id="edit_form" novalidate  method="post">


                <div class="modal-body">
                    @csrf
                    <div class="form-group row">
                        <div class="col-lg-6 col-sm-12">

                            <label for="name">
                                <h4>   الاسم
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <input type="hidden" name="color_id" class="form-control" id="color_id">

                            <input type="text" name="name" class="form-control" id="edit_name"
                                   aria-describedby="emailHelp" placeholder="" required>
                            <div class="invalid-feedback">
                                name
                            </div>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="col-lg-6 col-sm-12">

                            <label for="name">
                                <h4>  اللون
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <input type="color" name="color" class="form-control" id="edit_color"
                                   aria-describedby="emailHelp" placeholder="" required>
                            <div class="invalid-feedback">
                                الاسم
                            </div>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>



                    </div>




</div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><span><i class="fa fa-paper-plane"
                                                                               aria-hidden="true"></i></span>تاكيد
                        </button>

                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i
                                class="fa fa-window-close" aria-hidden="true"></i>
الغاء
                        </button>
                    </div>

            </form>
        </div>
    </div>
</div>
