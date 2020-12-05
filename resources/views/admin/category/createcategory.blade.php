@extends('admin_layout')
@section('admin_content')
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                Thêm loại sản phẩm
            </header>
            @if (!$msg)
                <?= $msg; ?>
            @endif
            <div class="panel-body">
                <div class="position-center">
                <form role="form" action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên loại</label>
                        <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mô tả loại sản phẩm:</label>
                        <textarea style="resize:none" rows="5" class="form-control" id="exampleInputPassword1" name="category_desc"></textarea>
                    </div>
                    <div class="checkbox">
                        <div class="radio">
                            <label>
                                <input type="radio" name="category_status" value="1" checked>
                                Hiển thị
                            </label>
                            <label>
                                <input type="radio" name="category_status" value="0">
                                Ẩn
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info">Thêm loại sản phẩm</button>
                </form>
                </div>

            </div>
        </section>
    </div>
</div>
@endsection