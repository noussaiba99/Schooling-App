<template>
    <article>
        <div class="cont">
            <form class="sign-in" action="#">
                <h2>Change Your Password</h2>
                <div>Use your account password</div>
                <input type="password" placeholder="old password" />
                <input type="password" placeholder="new password" />
                <input type="password" placeholder="confirm new password" />
                <button>Submit</button>
            </form>
        </div>
    </article>
</template>

<script>
    export default {
    }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style lang = "scss" scoped>
    .cont {
        padding-top: 10 px ;
        /*position: relative; */
        width: 730px ;
        height: 638px ;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 15px 30px rgba(0, 0, 0, .2),
                    0 10px 10px rgba(0, 0, 0, .2);
        background: linear-gradient(to bottom, #efefef, #ccc);

    }

    h2 {
        margin: 0;
    }

    p {
        margin: 20px 0 30px;
    }

    a {
        color: #222;
        text-decoration: none;
        margin: 15px 0;
        font-size: 1rem;
    }

    button {
        border-radius: 20px;
        border: 1px solid #266eda;
        background-color: #266eda;
        color: #fff;
        font-size: 1rem;
        font-weight: bold;
        padding: 10px 40px;
        margin-top: 30px;
        letter-spacing: 1px;
        text-transform: uppercase;
        cursor: pointer;
        transition: transform .1s ease-in;

        &:active {
            transform: scale(.9);
        }

        &:focus {
            outline: none;
        }
    }

    button.invert {
        background-color: transparent;
        border-color: #fff;
    }

    form {
        /*position: absolute;
        */top: 0;
        display: flex;
        margin-left: 10%; 
        align-items: center;
        justify-content: space-around;
        flex-direction: column;
        padding: 90px 60px;
        padding-top: 20px;
        padding-bottom: 20px;
        width: 80%;
        height: 100%; /*calc(100% - 180px);*/
        text-align: center;
        background: linear-gradient(to bottom, #efefef, #ccc);
        
        
        transition: all .5s ease-in-out;

        div {
            font-size: 1rem;
            padding-top: 0px;
            margin-top: 0px; 
            margin-bottom: 50px;
          
        }

        h2 {
          margin-top: 10px;
          padding-top: 0px;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 15px 15px;
            margin: 8px 0;
            width: calc(100% - 30px);
            border-radius: 15px;
            border-bottom: 1px solid #ddd;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, .4), 
                              0 -1px 1px #fff, 
                              0 1px 0 #fff;
            overflow: hidden;

            &:focus {
                outline: none;
                background-color: #fff;
            }
        }

        
    }

    .sign-in {
        left: 0;
        z-index: 2;
    }

    .sign-up {
        left: 0;
        z-index: 1;
        opacity: 0;
    }

    .sign-up-active {
        .sign-in {
            transform: translateX(100%);
        }

        .sign-up {
            transform: translateX(100%);
            opacity: 1;
            z-index: 5;
            animation: show .5s;
        }

        .overlay-container {
            transform: translateX(-100%);
        }

        .overlay {
            transform: translateX(50%);
        }

        .overlay-left {
            transform: translateX(0);
        }

        .overlay-right {
            transform: translateX(20%);
        }
    }

    @keyframes show {
        0% {
            opacity: 0;
            z-index: 1;
        }
        49% {
            opacity: 0;
            z-index: 1;
        }
        50% {
            opacity: 1;
            z-index: 10;
        }
    }
</style>
        border: 1px solid #dcdfe2;
<!-- Colors 
background: linear-gradient(to bottom right, rgb(90, 227, 231), #082e60) -->