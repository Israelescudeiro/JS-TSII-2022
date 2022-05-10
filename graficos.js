new Morris.Line({
    element: 'linha',
    data: [
            { year: '2018', value: 642 },
            { year: '2019', value: 845 },
            { year: '2020', value: 345 },
            { year: '2021', value: 467 },
            { year: '2022', value: 750 }
            ],
    xkey: 'year',
    ykeys: ['value'],
    labels: ['Value']
});

Morris.Area({
    element: 'area',
    data: [
        { y: '2018', a: 642, b: 122 },
        { y: '2019', a: 845, b: 122 },
        { y: '2020', a: 345, b: 122 },
        { y: '2021', a: 467, b: 122 },
        { y: '2022', a: 750, b: 122 }
        ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['A', 'B']
});

Morris.Donut({
    element: 'donuts',
    data: [
            { label: 'Pizzas', value: 642 },
            { label: 'Dogs', value: 845 },
            { label: 'Churrasco', value: 345 },
            { label: 'Chocolate', value: 467 },
            { label: 'Salgadinho', value: 750 }
            ],
    xkey: 'year',
    ykeys: ['value'],
    labels: ['Value']
});

Morris.Bar({
    element: 'barra',
    data: [
            { y: '2018', a: 642, b: 122 },
            { y: '2019', a: 845, b: 122 },
            { y: '2020', a: 345, b: 122 },
            { y: '2021', a: 467, b: 122 },
            { y: '2022', a: 750, b: 122 }
            ],
    xkey: 'y',
    ykeys: ['a', 'b'],
    labels: ['A', 'B']
});