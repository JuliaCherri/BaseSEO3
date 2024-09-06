<title>{!! !empty($meta_title) ? $meta_title : $pagetitle !!} - {!! evo()->getConfig('site_name') !!}</title>
<meta property="og:title" content="{!! !empty($meta_title) ? $meta_title : $pagetitle !!} - {!! evo()->getConfig('site_name') !!}">
<meta name="description" content="{!! !empty($meta_description) ? $meta_description : $introtext !!}">
<meta property="og:description" content="{!! !empty($meta_description) ? $meta_description : $introtext !!}">
{!! $meta_noindex !!}

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#000000">
<meta name="msapplication-TileColor" content="#000000">
<meta name="theme-color" content="#ffffff">

@if ( !empty($image_src) ) 
    <link rel="image_src" href="{!! $image_src !!}">
    <meta property="og:image" content="{!! $image_src !!}">
@elseif ( !empty($image) ) 
    <link rel="image_src" href="{!! $image !!}">
    <meta property="og:image" content="{!! $image !!}">
@else 
    <link rel="image_src" href="img/socials.png">
    <meta property="og:image" content="img/socials.png">
@endif
<meta property="og:type" content="website">
<meta property="og:site_name" content="{!! evo()->getConfig('site_name') !!}">

<meta http-equiv="Content-Type" content="text/html; charset={!! evo()->getConfig('modx_charset') !!}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<base href="{!! evo()->getConfig('site_url') !!}">
