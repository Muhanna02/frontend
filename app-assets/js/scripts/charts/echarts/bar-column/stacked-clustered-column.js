/*=========================================================================================
    File Name: stacked-clustered-column.js
    Description: echarts stacked clustered column chart
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Stacked clustered column chart
// ------------------------------

$(window).on("load", function(){

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: '../../../app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/bar',
            'echarts/chart/line'
        ],


        // Charts setup
        function (ec) {
            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('stacked-clustered-column'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Setup grid
                grid: {
                    x: 40,
                    x2: 20,
                    y: 70,
                    y2: 30
                },

                // Add tooltip
                tooltip: {
                    trigger: 'axis'
                },

                // Add legend
                legend: {
                    data: [
                        'القروض المخصصة','الفلل المخصصة','الأراضي المخصصة','',
                        'القروض المستلمة','الفلل المستلمة','الأراضي المستلمة'
                    ]
                },

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis: [{
                    type : 'category',
                    data : ['1الدفعة ','2الدفعة ','3الدفعة ','4الدفعة ','5الدفعة ','6الدفعة ','7الدفعة ','8الدفعة ','9الدفعة ','10الدفعة','11الدفعة','12الدفعة']
                    
//                      data : ['الدفعة 1','الدفعة 2','الدفعة 3','الدفعة 4','الدفعة 5','الدفعة 6','الدفعة 7','الدفعة 8','الدفعة 9','الدفعة 10','الدفعة 11','الدفعة 12']
                },
                {
                    type : 'category',
                    axisLine: {show:false},
                    axisTick: {show:false},
                    axisLabel: {show:false},
                    splitArea: {show:true},
                    splitLine: {show:false},
                    data : ['الدفعة 1','الدفعة 2','الدفعة 3','الدفعة 4','الدفعة 5','الدفعة 6','الدفعة 7','الدفعة 8','الدفعة 9','الدفعة 10','الدفعة 11','الدفعة 12']
                    
//                    data : ['الدفعة 1','الدفعة 2','الدفعة 3','الدفعة 4','الدفعة 5','الدفعة 6','الدفعة 7','الدفعة 8','الدفعة 9','الدفعة 10','الدفعة 11','الدفعة 12']
                }
                ],

                // Vertical axis
                yAxis: [{
                    type : 'value',
                    axisLabel:{formatter:'{value}'}
                }],

                // Add series
                series : [
                    {
                        name:'القروض المستلمة',
                        type:'bar',
                        itemStyle: {normal: {color:'rgba(22,211,154,1)', label:{show:true,textStyle:{color:'#007905'}}}},
                        data:[200,355,620,475,750,800,800,800,800,800,800,800]
                    },
                    {
                        name:'الفلل المستلمة',
                        type:'bar',
                        itemStyle: {normal: {color:'rgba(45,206,227,1)', label:{show:true,textStyle:{color:'#27727B'}}}},
                        data:[100,200,105,100,156,200,200,200,200,200,200,200]
                    },
                    {
                        name:'الأراضي المستلمة',
                        type:'bar',
                        itemStyle: {normal: {color:'rgba(249,142,118,1)', label:{show:true,textStyle:{color:'#d35806'}}}},
                        data:[306,511,908,778,900,950,950,950,950,950,950,950]
                    },
                    {
                        name:'القروض المخصصة',
                        type:'bar',
                        xAxisIndex:1,
                        itemStyle: {normal: {color:'rgba(22,211,154,0.7)', label:{show:true,formatter:function(p){return p.value > 0 ? (p.value +'\n'):'';}}}},
                        data:[700,850,1100,1300,1500,1600,1600,1600,1600,1600,1600,1600]
                    },
                    {
                        name:'الفلل المخصصة',
                        type:'bar',
                        xAxisIndex:1,
                        itemStyle: {normal: {color:'rgba(45,206,227,0.7)', label:{show:true}}},
                        data:[491,750,1000,1400,1800,2200,2200,2200,2200,2200,2200,2200]
                    },
                    {
                        name:'الأراضي المخصصة',
                        type:'bar',
                        xAxisIndex:1,
                        itemStyle: {normal: {color:'rgba(249,142,118,0.7)', label:{show:true,formatter:function(p){return p.value > 0 ? (p.value +'+'):'';}}}},
                        data:[1100,1500,2200,2500,3000,3500,3500,3500,3500,3500,3500,3500]
                    }
                ]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);


            // Resize chart
            // ------------------------------

            $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
});