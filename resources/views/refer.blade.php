@extends('index')
<section id="refer">
    <div class="subheader">
        <h1>Refer a Friend</h1>
    </div>
    <div class="container">
        <div class="content">
            <form action="/send" method="POST" class="">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    <button type="submit" class="btn">SEND</button>
                </div>
            </form>
            <div class="alert {{ isset($status) ? 'alert-' . $status : '' }}">
                {{ $msg or '' }}
            </div>
        </div>
    </div>
</section>