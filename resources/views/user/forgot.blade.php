@extends('layouts.master')
@section('title',"找回密码")
@section('main')
        <div id="Main">
            <div class="sep20">
            </div>
            <div class="box">
                <div class="header">
                    <a href="/">DEBUG</a><span class="chevron">&nbsp;›&nbsp;</span> 找回密码 &nbsp;
                    <img src="/suo.png" alt="" style="width: 16px;position: relative;top: 2px;left: -10px;">
                </div>
                <div class="cell">
                    <form method="post" action="{{ Route('forgot.p') }}">
                        @csrf
                        <table cellpadding="5" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td width="120" align="right">
                                    邮箱地址
                                </td>
                                <td width="auto" align="left">
                                    <input type="text" class="sl" name="email" value="" autofocus="autofocus" autocorrect="off" spellcheck="false" autocapitalize="off" placeholder="电子邮箱地址"/>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right">
                                    你是机器人么？
                                </td>
                                <td width="auto" align="left">
                                    <div title="点击刷新验证码" style=" background-repeat: no-repeat;cursor: pointer; width: 320px; height: 80px; border-radius: 3px; border: 1px solid #ccc;">
                                        <img src="{!! Captcha::src(); !!}"   onclick="javascript:this.src='/captcha/default?time='+Math.random()">
                                    </div>
                                    <div class="sep10">
                                    </div>
                                    <input type="text" class="sl" name="captcha" value="" autocorrect="off" spellcheck="false" autocapitalize="off" placeholder="请输入上图中的验证码"/>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right">
                                </td>
                                <td width="auto" align="left">
                                    <input type="submit" class="super normal button" value="发送邮件"/>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
@endsection()
@section('js')
    {{--判断是否登录--}}
    @if(session('id'))
        {!!  redirect()->route('index'); !!}
    @endif()
@endsection()