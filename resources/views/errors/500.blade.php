@extends('errors::layout')

@section('title', __('Server Error'))
@section('code', '500')
@section('message', __("We're sorry, something is wrong on our server."))
