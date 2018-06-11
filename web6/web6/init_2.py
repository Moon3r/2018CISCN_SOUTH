#! /usr/bin/env python 2.7 (62211)
#coding=utf-8
# Compiled at: 2018-05-20 06:00:14
#Powered by BugScaner
#http://tools.bugscaner.com/
#������ò���,������������ʹ�ð�!
from Shop import *
from User import *
from Captcha import *
handlers = [
 (
  '/', ShopIndexHandler),
 (
  '/shop', ShopListHandler),
 (
  '/info/(\\d+)', ShopDetailHandler),
 (
  '/seckill', SecKillHandler),
 (
  '/shopcar', ShopCarHandler),
 (
  '/shopcar/add', ShopCarAddHandler),
 (
  '/pay', ShopPayHandler),
 (
  '/captcha', CaptchaHandler),
 (
  '/user', UserInfoHandler),
 (
  '/user/change', changePasswordHandler),
 (
  '/pass/reset', ResetPasswordHanlder),
 (
  '/login', UserLoginHanlder),
 (
  '/logout', UserLogoutHandler),
 (
  '/register', RegisterHandler)]