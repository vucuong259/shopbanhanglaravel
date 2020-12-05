@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm danh mục sản phẩm
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <form role="form">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên sản phẩm</label>
                        <input type="email" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả sản phẩm:</label>
                        <textarea style="resize:none" rows="5" class="form-control" id="exampleInputPassword1" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Loại sản phẩm</label>
                        <select class="form-control input-sm m-bot15">
                            <option>Option 1</option>
                            <option>Option 2</option>
                            <option>Option 3</option>
                        </select>
                    </div>
                    <div class="checkbox">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" value="1" checked>
                                Hiển thị
                            </label>
                            <label>
                                <input type="radio" name="optionsRadios" value="2">
                                Ẩn
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Submit</button>
                </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection