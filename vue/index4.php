<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>组件的嵌套</title>
    <!-- 引入Vue -->
    <script type="text/javascript" src="./js/vue.js"></script>
</head>
<body>
<!-- 准备好一个容器-->
<div id="root">

</div>
</body>

<script type="text/javascript">
    Vue.config.productionTip = false //阻止 vue 在启动时生成生产提示。

    //定义student组件
    const student = Vue.extend({
        name:'student',
        template:`
				<div>
					<h2>学生姓名：{{name}}</h2>
					<h2>学生年龄：{{age}}</h2>
				</div>
			`,
        data(){
            return {
                name:'尚硅谷',
                age:18
            }
        }
    })

    //定义school组件
    const school = Vue.extend({
        name:'school',
        template:`
				<div>
					<h2>学校名称：{{name}}</h2>
					<h2>学校地址：{{address}}</h2>
					<student></student>
				</div>
			`,
        data(){
            return {
                name:'尚硅谷',
                address:'北京'
            }
        },
        //注册组件（局部）
        components:{
            student
        }
    })

    //定义hello组件
    const hello = Vue.extend({
        template:`<h1>{{msg}}</h1>`,
        data(){
            return {
                msg:'欢迎来到尚硅谷学习！'
            }
        }
    })

    //定义app组件
    const app = Vue.extend({
        template:`
				<div>
					<hello></hello>
					<school></school>
				</div>
			`,
        components:{
            school,
            hello
        }
    })

    //创建vm
    new Vue({
        template:'<app></app>',
        el:'#root',
        //注册组件（局部）
        components:{app}
    })
</script>
</html>
