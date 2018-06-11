@extends('layouts.master')
@section('title',"注册")
@section('main')
        <div id="Main">
            <div class="sep20"></div>
            <div class="box">
                <div class="header"><a href="/">DEBUG</a> <span class="chevron">&nbsp;›&nbsp;</span> 注册</div>
                <div class="inner">
                    <form method="post" action={{ Route('user.signup.p') }}>
                        <table cellpadding="5" cellspacing="0" border="0" width="100%">
                            <tr>
                                <td width="120" align="right" valign="top"><div class="sep5"></div>用户名</td>
                                <td width="auto" align="left">
                                    <input type="text" class="sls" name="nickname" value="" autocomplete="off" autocorrect="off" spellcheck="false" autocapitalize="off" required="required" />
                                    <div class="sep5"></div>
                                    <span class="fade">大小写字母，数字，下划线，长度3-15</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right" valign="top"><div class="sep5"></div>密码</td>
                                <td width="auto" align="left">
                                    <input type="password" class="sls" name="password" value="" autocomplete="new-password" autocorrect="off" spellcheck="false" autocapitalize="off" required="required" />
                                    <div class="sep5"></div>
                                    <span class="fade">密码长度6-20</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right" valign="top">
                                    <div class="sep5"></div>
                                    电子邮件
                                </td>
                                <td width="auto" align="left">
                                    <input type="email" class="sls" name="email" value="" autocorrect="off" spellcheck="false" autocapitalize="off" required="required" />
                                    <div class="sep5"></div>
                                    <span class="fade">请使用真实电子邮箱注册，将用于找回密码。</span>
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right">你是机器人么？</td>
                                <td width="auto" align="left">
                                    <div style="background-repeat: no-repeat;cursor: pointer;width: 320px; height: 80px; border-radius: 3px; border: 1px solid #ccc;" title="点击刷新验证码">
                                        <img src="{!! Captcha::src(); !!}" alt=""  onclick="javascript:this.src='/captcha/default??time='+Math.random()">
                                    </div>
                                    <div class="sep10"></div>
                                    <input type="text"  class="sl" name="captcha" value="" autocorrect="off" spellcheck="false" autocapitalize="off" placeholder="请输入上图中的验证码" required="required" />
                                </td>
                            </tr>
                            <tr>
                                <td width="120" align="right"></td>
                                <td>
                                    <input type="submit" class="super normal button" value="注册" />
                                </td>
                            </tr>
                        </table>
                        @csrf
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