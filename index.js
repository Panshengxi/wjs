/**
 * Created by Administrator on 2017/10/14/014.
 */
;(function (window){
    var colorArr =[1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f'];

    function Pillar(option){
        this.num = option.num || 10;
        this.w = option.w || 50;
    }
    Pillar.prototype.render = function (){
        var ul = $('#ul');
        var body = $('body');
        this.arrl = [];
        for (var i = 0; i < this.num; i++){
            var colorStr = '#';
            for (var j = 0; j< 6; j++){
                colorStr += colorArr[Math.floor(Math.random()*15)];
            };
            var h = 100 + Math.random()*500;
            var li = $('<li></li>');
            li.addClass('add').css({
                width:this.w,
                height:h,
                backgroundColor: colorStr,
                position:'relative',
                top:body.height()-(h+100)
            }).attr('index',i);
            this.arrl[i] = li.height();
            ul.append(li);
        };
    }


    Pillar.prototype.exchange = function (){

        if (this.arrl[this.current] > this.arrl[this.current + 1]) {

            var temp = this.arrl[this.current];
            this.arrl[this.current] = this.arrl[this.current + 1];
            this.arrl[this.current + 1] = temp;

            var $liB = $('li[index=' + (this.current + 1) + ']');
            var $liA = $('li[index=' + this.current + ']');

            $liB.css({
                transform:'translate(100*%)'
            })
            $liA.css({
                transform:'translate(-100*%)'
            })

            $liB.insertBefore($liA);

            var oldIndex = $liA.attr('index');
            $liA.attr('index', $liB.attr('index'));
            $liB.attr('index', oldIndex);
        };
    }
    Pillar.prototype.go = function () {
        var $this = this;
        //���õ�ǰ��Ƚ���Ԫ����ʽ
        this.current = 0;
        this.lis = $('li');
        this.count = this.lis.length;
        console.log(this.count);
        var i = 0;
        var next = 1;
        var timeid = setInterval(function () {
            console.log($this);
            //times�������ﵽ���鳤��-1������ѭ��
            if(i < $this.count -1) {
                //�������������Ҫʵ����Ԫ�ؽ���
                var change = $this.exchange();
                //�粻������ָ����ǰ
                if (!change) {
                    $this.current++;
                    next++;
                    //�ڲ�ѭ�������𽥼���
                    if ($this.current == $this.count - 1 - i) {
                        i++;
                        $this.current = 0;
                        next = 1;
                    }
                }
            } else {
                //������ɣ�����
                clearInterval(timeid);
            }
        },500);
    }
    window.Pillar = Pillar;
}(window));
var $this
    $('input[type=button]').click(function () {
        $this = $(this);

        if ($this.hasClass('disabled')) {
            alert('�ּ����õ�������Ŷ(*^_^*)');
            return;
        }
        liNew.go();
    });