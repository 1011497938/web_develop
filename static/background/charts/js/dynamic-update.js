 function get_lastDate(ymd,ym,n){  
        ymd=ymd?new Date(ymd.replace(/-/g,"/")):new Date();  
        ym&&(ym=="y"?ymd.setFullYear(ymd.getFullYear()-1):ymd.setMonth(ymd.getMonth()-1));  
        n&&ymd.setDate(ymd.getDate()+n);  
        return ymd.toLocaleDateString().match(/\d+/g).join('-');  
    }

$(function () {                                                                     
    $(document).ready(function() {                                                  
        Highcharts.setOptions({                                                     
            global: {                                                               
                useUTC: false                                                       
            }                                                                       
        });                                                                         
                                                                                    
        var chart;                                                                  
        $('#container').highcharts({                                                
            chart: {                                                                
                type: 'spline',                                                     
                animation: Highcharts.svg, // don't animate in old IE               
                marginRight: 10,                                                   
                events: {                                                           
                    load: function() {                                                                                                   
                        // set up the updating of the chart each second             
                        var series = this.series[0];         
                        var a=19;                       
                        setInterval(function() { 
                        a=a+1;
                        if (a>40) {return;};                                 
                            var x = a, // current time         
                                y = Math.random();                                  
                            series.addPoint([x, y], true, true);                    
                        }, 1000);                                                   
                    }                                                               
                }                                                                   
            },                                                                      
            title: {                                                                
                text: ' 近20天日访问量（后端未完成） '                                            
            },                                                                      
            xAxis: {                                                                
                type: 'linear',                                                   
                tickPixelInterval: 50,
                labels: {
    formatter:function(){
      if(this.value <20) { 
        return "";
      }
      else{
        var test=this.value-40;
        return get_lastDate("","",test).replace(/2015-/,"") ;
      }
    }
  }                                            
            },                                                                      
            yAxis: {                                                                
                title: {                                                            
                    text: '次数'                                                   
                },                                                                  
                plotLines: [{                                                       
                    value: 0,                                                       
                    width: 1,                                                       
                    color: '#808080'                                                
                }]                                                                  
            },                                                                      
            tooltip: {                                                              
                formatter: function() {                                             
                        return '<div style="text-align"><b>'+ this.series.name +'</b><br/>'+
                        Highcharts.numberFormat(this.y)+"</div>";                         
                }                                                                   
            },                                                                      
            legend: {                                                               
                enabled: false                                                      
            },                                                                      
            exporting: {                                                            
                enabled: false                                                      
            },                                                                      
            series: [{                                                              
                name: '访问人数',                                                
                data: (function() {                                                 
                    // generate an array of random data                             
                    var data = [],                                                  
                        time = (new Date()).getTime(),                              
                        i;                                                          
                                                                                    
                    for (i = 0; i < 20; i++) {                                    
                        data.push({                                                
                            x: i,                                     
                            y: 0                                        
                        });                                                         
                    }                                                               
                    return data;                                                    
                })()                                                                
            }]                                                                      
        });                                                                         
    });                                                                             
                                                                                    
});                                                                                 