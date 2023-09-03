<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true" >
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel"></h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><h5 style="color: #0c0e1a">&times;</h5></span>
                </button>
            </div>

            <form class="needs-validation" id="form" novalidate  method="post">

                <div class="modal-body">
                    @csrf
                    <div class="form-group row">
                        <div class="col-lg-4 col-sm-12">

                            <label for="amount">
                                <h4>   المبلغ
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>
                            <input type="number" min="0" name="amount" class="form-control" id="amount"
                                   aria-describedby="emailHelp" placeholder="" required>
                            <div class="invalid-feedback">
الاسم
                            </div>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="col-lg-4 col-sm-12">

                            <label for="name">
                                <h4>  فئةالعملة
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>

                            <select name="currency" id="currency" class="form-control">

                                <option value=""> اختر</option>
{{--@foreach(config('constant.app')as $key=> $value)--}}
                                <option value="EUR"> EUR</option>
                                <option value="USD"> USD</option>
                                <option value="JOD"> JOD</option>

{{--                                @endforeach--}}
{{--                                @endforeach--}}

                            </select>
                            <div class="invalid-feedback">
                                الاسم
                            </div>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>

                        <div class="col-lg-4 col-sm-12">

                            <label for="name">
                                <h4>  نوع العملية
                                    <span class="text-danger">*</span>
                                </h4>

                            </label>

                            <select name="type" id="type" class="form-control">

                                <option value=""> اختر</option>
                                <option value="debit"> debit</option>
                                <option value="credit"> credit</option>

                            </select>
                            <div class="invalid-feedback">
                                الاسم
                            </div>
                            <small id="emailHelp" class="form-text text-muted"></small>
                        </div>



                    </div>





                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><span><i class="fa fa-paper-plane"
                                                                               aria-hidden="true"></i></span>
تاكيد
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
