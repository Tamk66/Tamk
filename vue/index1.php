<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Vue 测试实例 - 菜鸟教程(runoob.com)</title>
    <script src="../vue.global.min.js"></script>
</head>
<body>
<div id="hello-vue" class="demo">
    {{ message }}
</div>

<script>
    const HelloVueApp = {
        data() {
            return {
                message: 'Hello Vue22!!'
            }
        }
    }

    Vue.createApp(HelloVueApp).mount('#hello-vue')
</script>
</body>
</html>