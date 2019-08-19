@extends('layouts.wechat')

@section('content')

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class=""></i>缴费</h2>
            </div>
            <div class="box-content">
                <form role="form" method="POST" action="{{ url('/income?student_id='.$student->id) }}">

                    {!! csrf_field() !!}
                    <div class="row">
                    <div class="form-group col-md-3">
                        <label class="control-label">学生名字： </label>
                        <label class="control-label">{{ $student->name}} </label><br>
                        <!--label class="control-label">所在学校： </label>
                        <label class="control-label">{{ $student->school}} </label><br>
                        <label class="control-label">父母信息： </label>
                        <label class="control-label">{{ $student->parents_info}} </label-->
                    </div>
                    </div>
                    <!--div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">名称 ： </label>
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">   
                    </div -->
                    <div class="row">
                         <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">会计科目 ： </label>
                            <select class="form-control" name="incomeCategory" >
                                @foreach($incomesCategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group{{ $errors->has('course_id') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">缴费课程 ： </label>
                            <select class="form-control" name="course_id" >
                                <option value="-1"> </option>
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">金额 ： </label>
                            <input type="number" class="form-control" name="amount" value="{{ old('amount') }}">   
                        </div>
                       

                        <!--div class="form-group{{ $errors->has('payment_method') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">支付方式 ： </label>
                            <select class="form-control" name="payment_method" >
                                @foreach($paymentMethods as $paymentMethod)
                                <option value="{{$paymentMethod->name}}">{{$paymentMethod->name}}</option>
                                @endforeach
                            </select>
                        </div-->
                        
                         <div id="datetimepicker" class="input-append date form-group{{ $errors->has('finance_year') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">财务年份 ： </label>
                            <select class="form-control" name="finance_year"> 
                               @for($i=2018;$i<=date_format(date_create(),"Y");$i++)
                                @if($i==date_format(date_create(),"Y"))
                                <option value="{{$i}}" selected ="selected">{{$i}}年</option>
                                @else
                                <option value="{{$i}}">{{$i}}年</option>
                                @endif
                                @endfor
                            </select>
                           
                        </div>
                         <div id="datetimepicker" class="input-append date form-group{{ $errors->has('finance_month') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">财务月份 ： </label>
                            <select class="form-control" name="finance_month">
                                @for($i=1;$i<=12;$i++)
                                    @if(date_format(date_create(),'m')==$i)
                                    <option value="{{$i}}" selected ="selected">{{$i}}月</option>
                                    @else
                                    <option value="{{$i}}">{{$i}}月</option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                        
                          <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }} col-md-3">
                            <label class="control-label">备注 ： </label>
                            <input type="text" class="form-control" name="comment" value="{{ old('comment') }}">   
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-btn fa-user"></i>提交
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--/span-->

</div><!--/row-->

@endsection
