/*=========================================================================================
    File Name: timeline.js
    Description: echarts timeline chart
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Timeline chart
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
            'echarts/chart/pie',
            'echarts/chart/funnel'
        ],


        // Charts setup
        function (ec) {
            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('timeline'));

            var idx = 1;

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Add timeline
                timeline: {
                    x: 10,
                    x2: 10,
                    data: [
                        '2017-01-15', '2017-02-15', '2017-03-15', '2017-04-15', '2017-05-15',
                        { name:'2017-06-15', symbol: 'emptyStar2', symbolSize: 8 },
                        '2017-07-15', '2017-08-15', '2017-09-15', '2017-10-15', '2017-11-15',
                        { name:'2017-12-15', symbol: 'star2', symbolSize: 8 }
                    ],
                    label: {
                        formatter: function(s) {
                            return s.slice(0, 7);
                        }
                    },
                    autoPlay: true,
                    playInterval: 3000
                },

                // Set options
                options: [
                    {

                        // Add title
                        title: {
                            text: 'معوقات التسليم',
                            subtext: 'أهم معوقات تسليم المنتاجات',
                            x: 'center'
                        },

                        // Add tooltip
                        tooltip: {
                            trigger: 'item',
                            formatter: "{a} <br/>{b}: {c} ({d}%)"
                        },

                        // Add legend
                        legend: {
                            x: 'left',
                            orient: 'vertical',
                            data: ['المخططات','المنتجات','الوزارة','البنوك','أخرى']
                        },

                        // Add custom colors
                        color: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#16D39A'],

                        // Display toolbox
                        toolbox: {
                            show: true,
                            orient: 'vertical',
                            feature: {
                                mark: {
                                    show: false,
                                    title: {
                                        mark: 'Markline switch',
                                        markUndo: 'Undo markline',
                                        markClear: 'Clear markline'
                                    }
                                },
                                dataView: {
                                    show: false,
                                    readOnly: false,
                                    title: 'View data',
                                    lang: ['View chart data', 'Close', 'Update']
                                },
                                magicType: {
                                    show: true,
                                    title: {
                                        pie: 'Switch to pies',
                                        funnel: 'Switch to funnel',
                                    },
                                    type: ['pie', 'funnel'],
                                    option: {
                                        funnel: {
                                            x: '25%',
                                            width: '50%',
                                            funnelAlign: 'left',
                                            max: 1700
                                        }
                                    }
                                },
                                restore: {
                                    show: true,
                                    title: 'Restore'
                                },
                                saveAsImage: {
                                    show: true,
                                    title: 'Same as image',
                                    lang: ['Save']
                                }
                            }
                        },

                        // Add series
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            center: ['50%', '50%'],
                            radius: '60%',
                            data: [
                                {value: idx * 128 + 80, name: 'المخططات'},
                                {value: idx * 64 + 160, name: 'المنتجات'},
                                {value: idx * 32 + 320, name: 'الوزارة'},
                                {value: idx * 16 + 640, name: 'البنوك'},
                                {value: idx++ * 8 + 1280, name: 'أخرى'}
                            ]
                        }]
                    },

                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
                    },
                    {
                        series: [{
                            name: 'Browser',
                            type: 'pie',
                            data: [
                                {value: idx * 128 + 80,  name:'المخططات'},
                                {value: idx * 64  + 160,  name:'المنتجات'},
                                {value: idx * 32  + 320,  name:'الوزارة'},
                                {value: idx * 16  + 640,  name:'البنوك'},
                                {value: idx++ * 8  + 1280, name:'أخرى'}
                            ]
                        }]
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