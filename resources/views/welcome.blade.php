<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
</head>

<body class="antialiased">

    <div id="root">
        <!-- <input type="text" name="coupon-code" id="coupon-code" v-model="coupon"> -->
        <!-- <input type="text" name="coupon-code" id="coupon-code" :value="coupon" @input="coupon = $event.target.value"> -->
        <coupon v-model="coupon">

    </div>
    <script src="js/app.js"></script>
    <script>
    Vue.component('coupon', {
        template: `
            <input type="text" :value="code">
        `,
    })

    new Vue({
        el: '#root', 
        
        data(){
            return {
                coupon: 'FREEFIRE'
            };
        },

    })
    </script>
</body>

</html>
