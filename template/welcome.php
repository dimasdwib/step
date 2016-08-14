<?php step::extend('master') ?>

<?php step::section('style') ?>

<link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300' rel='stylesheet' type='text/css'>
<style>
body {
    font-family: sans, "Work Sans";
    background-color: #f4f4f4;
    color: #8e8e8e;
    padding: 0;
    margin: 0;
}
.welcome {
    text-align: center;
    margin: auto;
    font-weight: 100;
}
.head {
    padding: 0;
    font-size: 6em;
    margin-bottom: 10px;
    margin-top: 40px;
}
.tag {
    font-size: 1em;
    font-weight: 400;
}
.code {
    color: #eaeaea;
    margin: 10px auto;
    max-width: 700px;
    background-color: #3e4547;
    padding: 15px;
    border-radius: 6px;
    font-family: monospace;
}

.hi {
    color: #fff600;
}

.footer {
    padding: 20px;
    text-align: center;
    font-weight: 400;
    font-size: 0.8em;
}

.bar {
    width: 100%;
    height: 15px;
    background: #00bbff;
}

</style>

<?php step::endsection()?>

<?php step::section('content') ?>
<div class="bar"></div>
<div class="welcome">
    <p class="head"><?=$welcome?></p>
    <p class="tag"><?=$tag?></p><br>
</div>

<div class="code">
<pre>
    <span class="hi">&lt;?php</span>

    include 'src/step.php';

    $template = new step('template');

    echo $template->render('welcome',[

        'data' => 'Hello Dude.. !';

    ]);
</pre>
</div>

<div class="code">
<pre>
    // Master

    &lt;!DOCTYPE html&gt;
    &lt;html&gt;

    &lt;head&gt;
        &lt;meta charset=&quot;utf-8&quot;&gt;
        &lt;title&gt; Hello World &lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;

        <span class="hi">&lt;?php step::setSection(&#39;content&#39;) ?&gt;</span>

    &lt;/body&gt;

    &lt;/html&gt;
</pre>
</div>

<div class="code">
<pre>
    //Extends

    <span class="hi">&lt;?php step::extend('master.php') ?&gt;

    &lt;?php step::section('content') ?&gt;</span>

        &lt;body>
            &lt;div class="content"&gt;

                // Content

            &lt;/div&gt;
        &lt;/body&gt;

    <span class="hi">&lt;?php step::endsection() ?&gt;</span>

</pre>
</div>

<?php step::endSection() ?>
