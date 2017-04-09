@extends('index')
<section id="refer">
    <div class="subheader">
        <h1>Refer a Friend</h1>
    </div>
    <div class="container">
        <div class="content">
            <div class="text-block text-center">
                <h3>Earn $160 cash or more!</h3>
                <br>
                <h6>Do your friends need better grades?</h6>
                <h6>Tell your friends about DataPi.</h6>
                <h6>Your friend will receive $20 discount upon registration. You will receive up to $160 for every 3 referrals.</h6>
            </div>
            <form action="/send" method="POST" class="">
                <div class="form-group">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="friend" name="friend" placeholder="Friend's Name" required>
                    </div>
                </div>
                <button type="submit" class="btn pull-right">SEND</button>
            </form>
            <div class="alert {{ isset($status) ? 'alert-' . $status : '' }}">
                {{ $msg or '' }}
            </div>
        </div>
    </div>
</section>