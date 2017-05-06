<!doctype html>
<html class="no-js" lang="de">
<head>

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
    <title><?=$site->title()->html();?></title>
    
    <?php // Foundation ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css" integrity="sha256-itWEYdFWzZPBG78bJOOiQIn06QCgN/F0wMDcC4nOhxY=" crossorigin="anonymous" />

    <?php // Google Fonts ?>
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"> 
    
    <?php // Font Awesome ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <?php // jQuery ?>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <?=$site->site_html()->value();?>
  
</head>
<body>
    <header>
        <div class="row">
            <div class="columns">
                <div class="row">
                    <div class="columns small-6 medium-4 large-2">
                        <a href="/">Logo</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
