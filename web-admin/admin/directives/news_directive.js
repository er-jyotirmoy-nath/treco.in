/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
myapp.directive("newsDetails",function(){
    return {
        restric:'E',
        scope:{
          itemDetails:"=",
          deletenews:"&"
        },        
        template:`<pre ng-if="itemDetails.id">
            ID:{{itemDetails.id}}
           Title:{{itemDetails.title}}
           Image:<img ng-src="{{itemDetails.image_url}}" style="width: 100px;"/>
           Content:<p ng-bind-html="itemDetails.content"></p>
           
         </pre>`
    }
});

