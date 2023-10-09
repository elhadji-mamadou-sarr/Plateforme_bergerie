
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

<div class="bodyy">
<div class="d-block">

            @if (session('success'))
                <div class="custom-modal">
                    <div class="succes succes-animation icon-top ">
                        <i class="fa fa-check"></i>
                    </div>
                    <div class="succes border-bottom"></div>
                    <div class="content">
                        <p class="message-type">{{ session('success') }}</p>
                    </div>
                </div>
            @endif


            @if ($errors->any())
                <div class="alert alert-danger" >
                    <ul class="my-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    <div class="contenue" >

        <div class="box one">


            <div class="details">

                <div class="topic">@yield('title')</div>

                <br>
                <p><i class="fas fa-envelope" style="padding: 3%"></i>&nbsp;&nbsp;&nbsp;{{ $mouton->personne->email}} </p>
                <p><i class="fas fa-phone-alt" style="padding: 3%"></i>&nbsp;&nbsp;&nbsp;{{ $mouton->personne->telephone}} </p>
                <p><i class="fas fa-map-marker-alt" style="padding: 3%"></i>&nbsp;&nbsp;&nbsp;{{ $mouton->personne->adresse}} </p><br>

            </div>
            <hr>
            <div class="contente">

                    <div class="right-side">
                        <div class="topic-text">Nous contacter</div>
                        <form action="{{ route('client.contact', $mouton)}}">
                                <div class="input-box">
                                    <input type="text" name="name" placeholder="Enter your name">
                                </div>
                                <div class="input-box">
                                    <input type="text" name="email" placeholder="Enter your email">
                                </div>
                                <div class="input-box message-box">
                                    <textarea name="message" id="" placeholder="Entrer votre message" cols="30" rows="10"></textarea>
                                </div>
                                <div class="button">
                                    <button>Commander</button>
                                </div>
                        </form>
                    </div>

            </div>

        </div>

        <div class="box two">
            <div class="image-box">

                <div class="image">
                    <img src="{{ asset('storage/' . $mouton->image) }}" alt="Image du mouton">
                </div>

                <div class="info">
                    <div class="brand">{{ $mouton->race }} </div>

                    <div class="name">{{ $mouton->prix }} Fcf</div>
                    <div class="shipping">{{ $mouton->généalogie }}</div>
                    <div class="button2">
                        <button>Acheter</button>
                    </div>
                </div>

            </div>
        </div>


    </div>
</div>
</div>



<style>

        .bodyy{
        display: flex;
        width: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background: #eee;
        }
        ::selection{
        background: #fee6eb;
        }

        .bodyy:before{
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        clip-path: circle(55% at right 30%);
        background: #e6e6e6;
        background-image: linear-gradient(135deg, #71b7e6, #9b59b6);/*linear-gradient( 0deg,  #fd9bb0 10%, #F6416C 100%)*/;
        }
        .contenue{
        display: flex;
        max-width: 750px;
        background: #fff;
        border-radius: 12px;
        justify-content: space-between;
        box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.15);
        position: relative;

        }
        .contenue::before{
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        border-radius: 12px;
        clip-path: circle(65% at right 35%);
        background-image: linear-gradient(135deg, #71b7e6, #9b59b6)/*linear-gradient( 135deg,  #fd9bb0 10%, #F6416C 100%)*/;
        }
        .contenue .box.one{
        padding: 35px 5px 0px 35px;
        }

        .box.one .details .topic{
        font-size: 30px;
        font-weight: 500;
        }
        .box.one .details p{
        color: #737373;
        font-size: 13px;
        font-weight: 500;
        }
        .box.one .rating{
        color: #fd9bb0;
        font-size: 14px;
        margin-top: 10px;
        }
        .box.one .price-box{
        margin-top: 16px;
        }
        .box.one .discount{
        font-size: 20px;
        margin: 10px 0 0 12px;
        position: relative;
        color: #737373;
        }
        .box.one .discount:before{
        content: '';
        position: absolute;
        height: 1px;
        width: 100px;
        background: #737373;
        top: 50%;
        left: -8px;
        }
        .box.one .price{
        color: #fc6989;
        font-size: 30px;
        }

        .contenue .box.two .image{
        position: relative;
        right: 0;
        top: 0;
        height: 340px;
        width: 430px;
        }
        .image img{
        height: 100%;
        width: 100%;
        object-fit: cover;
        }
        .contenue .box.two .image-box{
        position: relative;
        text-align: right;
        right: 0;
        bottom: 27px;
        }
        .box.two .image-box .info{
        margin: 0 35px 0 0;
        }
        .box.two .info .brand{
        font-size: 17px;
        font-weight: 600;
        color: #c9032e;
        }
        .box.two .info .name{
        font-size: 20px;
        font-weight: 500;
        color: #fff;
        }
        .box.two .info .shipping{
        font-size: 14px;
        font-weight: 400;
        color: #000;
        }
        .box.two .button2{
        margin: 17px 0;
        }
        .button2 button{
        outline: none;
        color: #fff;
        border: 1px solid #fff;
        border-radius: 12px;
        padding: 8px 17px;
        background: transparent;
        font-size: 15px;
        font-weight: 400;
        cursor: pointer;
    }


    /** Formulaire de contacte**/
    .container .contente{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 5%;
    }
    .contente .left-side{
    width: 25%;
    height: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top: 15px;
    position: relative;
    }
    .contente .left-side::before{
    content: '';
    position: absolute;
    height: 70%;
    width: 2px;
    right: -15px;
    top: 50%;
    transform: translateY(-50%);
    background: #afafb6;
    }
    .contente .left-side .details{
    margin: 14px;
    text-align: center;
    }
    .contente .left-side .details i{
    font-size: 30px;
    color: #3e2093;
    margin-bottom: 10px;
    }
    .contente .left-side .details .topic{
    font-size: 18px;
    font-weight: 500;
    }
    .contente .left-side .details .text-one,
    .contente .left-side .details .text-two{
    font-size: 14px;
    color: #afafb6;
    }
    .container .contente .right-side{
    width: 100%;
    margin-bottom: 15px;

    }
    .contente .right-side .topic-text{
    font-size: 23px;
    font-weight: 600;
    color: #3e2093;
    }
    .right-side .input-box{
    height: 50px;
    width: 100%;
    margin: 12px 0;
    }
    .right-side .input-box input,
    .right-side .input-box textarea{
    height: 100%;
    width: 100%;
    border: none;
    outline: none;
    font-size: 16px;
    background: #F0F1F8;
    border-radius: 6px;
    padding: 0 15px;
    resize: none;
    }
    .right-side .message-box{
    min-height: 110px;
    }
    .right-side .input-box textarea{
    padding-top: 6px;
    }


    button{
    color: #fff;
    font-size: 18px;
    outline: none;
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    background:linear-gradient(135deg, #71b7e6, #9b59b6) ;
    cursor: pointer;
    transition: all 0.3s ease;
    }
    button:hover{
    background: linear-gradient(135deg, #9b59b6, #71b7e6);
    }


    /********************************
    Message de succe
    *******************************/

    .succes {
    background-color: #4BB543;
}

.succes-animation {
    animation: succes-pulse 2s infinite;
}


.custom-modal {
    position: relative;
    width: 350px;
    min-height: 100px;
    background-color: #fff;
    border-radius: 30px;
    margin: 40px 10px;
}

.custom-modal .content {
    padding-top: 10px;
    width: 100%;
    text-align: center;
}

.custom-modal .content .type {
    font-size: 18px;
    color: #999;
}

.custom-modal .content .message-type {
    font-size: 24px;
    color: #000;
}

.custom-modal .border-bottom {
    position: absolute;
    width: 300px;
    height: 20px;
    border-radius: 0 0 30px 30px;
    bottom: -20px;
    margin: 0 25px;
}

.custom-modal .icon-top {
    position: absolute;
    width: 100px;
    height: 50px;
    border-radius: 50%;
    top: -30px;
    margin: 0 125px;
    font-size: 30px;
    color: #fff;
    line-height: 100px;
    text-align: center;
}

@keyframes succes-pulse {
    0% {
        box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .2);
    }

    50% {
        box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .4);
    }

    100% {
        box-shadow: 0px 0px 30px 20px rgba(75, 181, 67, .2);
    }
}

@keyframes danger-pulse {
    0% {
        box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .2);
    }

    50% {
        box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .4);
    }

    100% {
        box-shadow: 0px 0px 30px 20px rgba(202, 11, 0, .2);
    }
}



@media only screen and (max-width: 800px) {
    .page-wrapper {
        flex-direction: column;
    }
}


</style>
