<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>基本使用</title>
    <script src="./js/vue.js"></script>
</head>
<body>
<!--
    Vue中使用组件的三大步骤：
            一、定义组件(创建组件)
            二、注册组件
            三、使用组件(写组件标签)

    一、如何定义一个组件？
                使用Vue.extend(options)创建，其中options和new Vue(options)时传入的那个options几乎一样，但也有点区别；
                区别如下：
                        1.el不要写，为什么？ ——— 最终所有的组件都要经过一个vm的管理，由vm中的el决定服务哪个容器。
                        2.data必须写成函数，为什么？ ———— 避免组件被复用时，数据存在引用关系。
                备注：使用template可以配置组件结构。

    二、如何注册组件？
                    1.局部注册：靠new Vue的时候传入components选项
                    2.全局注册：靠Vue.component('组件名',组件)

    三、编写组件标签：
                    <school></school>
-->
<!-- 准备好一个容器-->
<div id="root">
    <hello></hello>
    <hr>
    <h1>{{msg}}</h1>
    <hr>
    <!-- 第三步：编写组件标签 -->
    <school></school>
    <hr>
    <!-- 第三步：编写组件标签 -->
    <student></student>
    <!-- 第三步：编写组件标签 -->
    <hello1></hello1>
</div>

<div id="root2">
    <hello></hello>
</div>
</body>

<script type="text/javascript">
    // Vue.config.productionTip = false

    //第一步：创建school组件
    const school = Vue.extend({
        template:`
				<div class="demo">
					<h2>学校名称：{{schoolName}}</h2>
					<h2>学校地址：{{address}}</h2>
					<button @click="showName">点我提示学校名</button>
				</div>
			`,
        // el:'#root', //组件定义时，一定不要写el配置项，因为最终所有的组件都要被一个vm管理，由vm决定服务于哪个容器。
        data(){
            return {
                schoolName:'尚硅谷',
                address:'北京昌平'
            }
        },
        methods: {
            showName(){
                alert(this.schoolName)
            }
        },
    })

    //第一步：创建student组件
    const student = Vue.extend({
        template:`
				<div>
					<h2>学生姓名：{{studentName}}</h2>
					<h2>学生年龄：{{age}}</h2>
				</div>
			`,
        data(){
            return {
                studentName:'张三',
                age:18
            }
        }
    })

    //第一步：创建hello组件
    const hello = Vue.extend({
        template:`
				<div>
					<h2>你好啊！{{name}}</h2>
				</div>
			`,
        data(){
            return {
                name:'Tom'
            }
        }
    })

    //第二步：全局注册组件
    Vue.component('hello',hello)

    //第一步：创建hello组件
    const hello1 = Vue.extend({
        template:`
				<div>
					<h2>你好啊！{{name}}</h2>
				</div>
			`,
        data(){
            return {
                name:'Tom33'
            }
        }
    })

    //创建vm
    new Vue({
        el:'#root',
        data:{
            msg:'你好啊！'
        },
        //第二步：注册组件（局部注册）
        components:{
            school,
            student,
            hello1
        }
    })

    new Vue({
        el:'#root2',
    })
</script>
</html>
