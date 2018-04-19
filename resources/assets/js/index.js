(function   ()  {
    $('.time-body').hide();
    $('#d14').on('click',function(){
        $(this).addClass('active');
        $('#day14').removeClass('hidden').addClass('show');
        $('#day15').removeClass('show').addClass('hidden');
        $('#d15').removeClass('active');
    })
    $('#d15').on('click',function(){
        $(this).addClass('active');
        $('#day15').removeClass('hidden').addClass('show');
        $('#day14').removeClass('show').addClass('hidden');
        $('#d14').removeClass('active');
    })
    $('#modal-rank').on('click',function(){
        console.log('a')
        $(this).addClass('active');
        $('#rank-section').removeClass('hidden').addClass('show');
        $('#vote-section').removeClass('show').addClass('hidden');
        $('#vote-rank').removeClass('active');
    })
    $('#vote-rank').on('click',function(){
        console.log('b')
        $(this).addClass('active');
        $('#vote-section').removeClass('hidden').addClass('show');
        $('#rank-section').removeClass('show').addClass('hidden');
        $('#modal-rank').removeClass('active');
    })
    $('.time-title').on('click',function(){
        if($(this).prev().css('transform') == 'matrix(6.12323e-17, 1, -1, 6.12323e-17, 0, 0)'){
            $(this).prev().css({
                'transform':'rotate(0)',
                '-webkit-transform':'rotate(0)',
            })
        }else{
            $(this).prev().css({
                'transform':'rotate(90deg)',
                '-webkit-transform':'rotate(90deg)',
            })
        }
        console.log( $(this).prev().css('transform'));
        $(this).next().toggle();
    })
    //rank
    function sortNum(property){
        return function(a,b){
            let value1 = a[property];
            let value2 = b[property];
            return value1 - value2;
        }
    }
    //rank by golds
    $.ajax({
        type:'get',
        url:'../api/colleges',
        success: function(msg){
            var colleges = msg.data;
            colleges = colleges.sort(sortNum('golden.length'));
            console.log(colleges.sort(sortNum('golden.length')));
            //new nodes
            for(let i=0;i<colleges.length;i++){
                colleges[i].index = i+1;
                if(i>0){
                    if(colleges[i].golden.length == colleges[i-1].golden.length)
                        colleges[i].index = colleges[i-1].index;
                }
                let index = colleges[i].index;
                let name = colleges[i].name;
                let golden = colleges[i].golden.length;
                let $td = `<tr ><td class='fir-td'> ${index} </td><td class='sec-td'> ${name} </td><td class='third-td'> ${golden} </td></tr>`;
                $('#rank-section>table').append($td);
            }
        }
    })
})();