@extends('layouts.app')

@section('content')
    <h1>Overlay</h1>
    <form action="overlay" method="get" target="_blank">
        <div class="form-group">
            <label for="msg">Message</label>
            <input type="text" class="form-control" name="msg" id="msg" placeholder="message">
        </div>
        <div class="form-group">
            <label for="color">Message: Text Color</label>
            <input type="color" class="form-control" name="color" id="color">
        </div>
        <div class="form-group">
            <label for="msg_effect">Effects</label>
            <select class="form-control" name="msg_effect" id="msg_effect">
                <option value='' selected>none</option>
                <option value='blazing'>Blazing</option>
                <option value='bubbles'>Bubbles</option>
                <option value='flaming'>Flaming</option>
                <option value='flash'>Flash</option>
                <option value='glitch'>Glitch</option>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="textborder" id="textborder">
            <label class="form-check-label" for="textborder">Text: Border</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="textshadow" id="textshadow">
            <label class="form-check-label" for="textshadow">Text: Shadow</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="msg_animate" id="msg_animate">
            <label class="form-check-label" for="msg_animate">Animate Message</label>
        </div>
        <div class="form-group">
            <label for="msg_speed">Animation Speed</label>&nbsp;<small>Seconds</small>
            <input type="number" class="form-control" name="msg_speed" id="msg_speed" min="0" required>
        </div>
        <hr/>
        <div class="form-group">
            <label for="img">Image: URL</label>&nbsp;<small>External URL</small>
            <input type="url" class="form-control" name="img" id="img" placeholder="image url">
        </div>
        <div class="form-group">
            <label for="size">Image: Size</label>&nbsp;<small>px</small>
            <input type="number" class="form-control" name="size" id="size">
        </div>
        <div class="form-group">
            <label for="radius">Image: Radius</label>
            <select class="form-control" name="radius" id="radius">
                <option value=''>None</option>
                <option value='border-10'>Rounded</option>
                <option value='border-circle'>Circle</option>
            </select>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="shadow" id="shadow">
            <label class="form-check-label" for="shadow">Image: Shadow</label>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="rotate" id="rotate">
            <label class="form-check-label" for="rotate">Image: Animate</label>
        </div>
        <div class="form-group">
            <label for="img_speed">Animation Speed</label>&nbsp;<small>Seconds</small>
            <input type="number" class="form-control" name="img_speed" id="img_speed" min="0" required>
        </div>
        <hr>
        <label>Countdown</label>
        <div class="form-inline">
            <div class="form-group">
                <label for="count_down_min">Minutes</label><br/>
                <input type="number" class="form-control" id="count_down_min" name="count_down_min" min="0" max="9999">
            </div>
            <div class="form-group">
                <label for="count_down_sec">Seconds</label><br/>
                <input type="number" class="form-control" id="count_down_sec" name="count_down_sec" min="0" max="60">
            </div>
        </div>
        <hr/>
        <div id="fontintro">
            <div class="form-group">
                <label for="font">Base Font Style</label>
                <select class="form-control" name="font" id="font">
                    <option value='Amaranth'>Amaranth</option>
                    <option value='Asap'>Asap</option>
                    <option value='Audiowide'>Audiowide</option>
                    <option value='Bangers'>Bangers</option>
                    <option value='Barrio'>Barrio</option>
                    <option value='Basic'>Basic</option>
                    <option value='Black Ops One'>Black Ops One</option>
                    <option value='Butcherman'>Butcherman</option>
                    <option value='Cinzel Decorative'>Cinzel Decorative</option>
                    <option value='Dokdo'>Dokdo</option>
                    <option value='Eater'>Eater</option>
                    <option value='Emblema One'>Emblema One</option>
                    <option value='Faster One'>Faster One</option>
                    <option value='Fontdiner Swanky'>Fontdiner Swanky</option>
                    <option value='Frijole'>Frijole</option>
                    <option value='Gorditas'>Gorditas</option>
                    <option value='Luckiest Guy'>Luckiest Guy</option>
                    <option value='matrixmedium'>Matrix</option>
                    <option value='Metal Mania'>Metal Mania</option>
                    <option value='New Rocker'>New Rocker</option>
                    <option value='Nosifer'>Nosifer</option>
                    <option value='Notable'>Notable</option>
                    <option value='Passion One'>Passion One</option>
                    <option value='Permanent Marker'>Permanent Marker</option>
                    <option value='Press Start 2P'>Press Start 2P</option>
                    <option value='Rammetto One'>Rammetto One</option>
                    <option value='Stalinist One'>Stalinist One</option>
                    <option value='Ultra'>Ultra</option>
                    <option value='VT323'>VT323</option>
                    <option value='Wendy One'>Wendy One</option>
                    <option value='ZCOOL KuaiLe'>ZCOOL KuaiLe</option>
                </select>
            </div>
        </div>
        <div id="fontpreview_intro">
            <iframe src="" frameborder="0" style="border: none; overflow: hidden; width: 100%; height: 60px;"></iframe>
        </div>
        <div class="form-group">
            <label for="fontsize">Base Font size</label>&nbsp;<small>pt</small>
            <input type="number" class="form-control" name="fontsize" id="fontsize">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection