<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>几个注意点</title>
    <script type="text/javascript" src="./js/vue.js"></script>
</head>
<body>
<!--
    几个注意点：
            1.关于组件名:
                        一个单词组成：
                                    第一种写法(首字母小写)：school
                                    第二种写法(首字母大写)：School
                        多个单词组成：
                                    第一种写法(kebab-case命名)：my-school
                                    第二种写法(CamelCase命名)：MySchool (需要Vue脚手架支持)
                        备注：
                                (1).组件名尽可能回避HTML中已有的元素名称，例如：h2、H2都不行。
                                (2).可以使用name配置项指定组件在开发者工具中呈现的名字。

            2.关于组件标签:
                        第一种写法：<school></school>
                        第二种写法：<school/>
                        备注：不用使用脚手架时，<school/>会导致后续组件不能渲染。

            3.一个简写方式：
                        const school = Vue.extend(options) 可简写为：const school = options
-->
<!-- 准备好一个容器-->
<div id="root">
    <h1>{{msg}}</h1>
    <school></school>
</div>
</body>

<script type="text/javascript">
    Vue.config.productionTip = false

    //定义组件
    const s2 = Vue.extend({
        name:'atguigu',
        template:`
				<div>
					<h2>学校名称：{{name}}</h2>
					<h2>学校地址：{{address}}</h2>
				</div>
			`,
        data(){
            return {
                name:'尚硅谷',
                address:'北京'
            }
        }
    })

    new Vue({
        el:'#root',
        data:{
            msg:'欢迎学习Vue!'
        },
        components:{
            school: s2
        }
    })
</script>
</html>
