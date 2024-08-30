@extends('user.layout.masterpage')
@section('contant')

<section id="home">

    <div class="contaner">
        <div class="left">
            <img src="/image/image.jpg" alt="505" width="150">
        </div>
        <div class="right">
            <div class="hcard">
                <h3>lorem</h3>
                <p class="hc-style">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Fugit doloremque sit, laudantium cum provident aut quam eligendi ni. <br>
                    Debitis perferendis labore fugit dolor deserunt quo suscipit quaerat! <br>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="services">
    <div class="contaner">
        <div class="cards">
            <h3>service</h3>
            <p class="hc-style">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Cumque qui adipisci deleniti eius laudantium. Deserunt, <br>
                explicabo accusamus neque, ab deleniti earum incidunt. <br>
            </p>
            <a href="#" class="links">go</a>
        </div>
        <div class="cards">
            <h3>service</h3>
            <p class="hc-style">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Cumque qui adipisci deleniti eius laudantium. Deserunt, <br>
                explicabo accusamus neque, ab deleniti earum incidunt. <br>
            </p>
            <a href="#" class="links">go</a>
        </div>
        <div class="cards">
            <h3>service</h3>
            <p class="hc-style">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                Cumque qui adipisci deleniti eius laudantium. Deserunt, <br>
                explicabo accusamus neque, ab deleniti earum incidunt. <br>
            </p>
            <a href="#" class="links">go</a>
        </div>
    </div>
</section>
<section id="about">
    <div class="contaner-1">
        <div class="left">
            <img src="/image/image.jpg" alt="505" width="150">
        </div>
        <div class="right">
            <div class="hcard">
                <h3>lorem</h3>
                <p class="hc-style">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                    Fugit doloremque sit, laudantium cum provident aut quam eligendi ni. <br>
                    Debitis perferendis labore fugit dolor deserunt quo suscipit quaerat! <br>
                </p>
            </div>
        </div>
    </div>
</section>
<section id="contact">

    <form action="#" method="post">
        <div class="left">

        </div>
        <div class="right">
            <div class="box-area">
                <label for="location"></label>
            </div>
            <div class="box-area">
                <label for="message">Message</label>
                <br>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </div>
        </div>

        <button type="submit">send</button>

    </form>

</section>


@endsection
