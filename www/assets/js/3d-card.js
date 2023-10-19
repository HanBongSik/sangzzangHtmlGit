$(document).ready( function() {

    cubeAnim.init({
        elem : document.getElementById( 'my_cube' )
    });

});

var cubeAnim = {

    // ATTRIBUT
    attr: {
        el: null,
        $el: null,
        elH: null,
        pos: {
            x: 0,
            y: 0
        },
        rot: {
            x: 0,
            y: 0,
            z: 0
        }
    },

    // TOOLS
    tools: {
        reset: $( '#reset-3d' ),
        size: $( '#size-cube' ),
        theme: $( '#theme-cube' ),
        explose: $( '#explose-3d' ),
        implose: $( '#implose-3d' )
    },

    // RENDER
    render: function () {
        this.attr.el.style.webkitTransform = "" +
            "rotateX(" + this.attr.rot.x*0.06 + "deg)" +
            "rotateY(" + this.attr.rot.y*0.06 + "deg)" +
            "rotateZ(" + this.attr.rot.z*0.06 + "deg)" ;
    },

    // EVENT CUBE
    event: function () {
        var that = this;

        this.attr.elH.on('drag', function ( e ){
            that.update3d( e );
        });

        this.attr.elH.on('dragstart', function ( e ){
            that.attr.$el.removeClass( 'cube--transi cube--ani' );
            that.update3d( e );
        });

        this.attr.elH.on('dragend', function ( e ){
            that.attr.$el.addClass( 'cube--transi' );
            that.predict3d( e );
            setTimeout( function () {
                that.attr.$el.addClass( 'cube--ani' );
            }, 300);
        });

        this.tools.reset.on('click', function ( e ){
            that.reset3d();
        });

        this.tools.size.on('change', function ( e ){
            that.sizeCube( $(this).val() );
        });

        this.tools.theme.on('change', function ( e ){
            that.changeTheme( $(this).val() );
        });

        this.tools.explose.on('click', function ( e ){
            that.explose3d();
        });

        this.tools.implose.on('click', function ( e ){
            that.implose3d();
        });
    },

    // INIT CUBE
    init: function ( args ) {
        this.attr.el = args.elem;
        this.attr.$el = $( args.elem );
        this.attr.elH = Hammer( args.elem );
        this.render();
        this.event();
    },

    // UPDATE 3D
    update3d: function ( e ) {
        if (!this.attr.event) this.attr.event = e;
        if (this.attr.event.timeStamp + 100 < e.timeStamp) this.attr.event = e;
        this.attr.rot.x += -e.gesture.deltaY * e.gesture.velocityY;
        this.attr.rot.y += e.gesture.deltaX * e.gesture.velocityX;
        this.render();
    },

    // PREDICT 3D
    predict3d: function ( e ) {
        var speedY = (e.gesture.deltaY - this.attr.event.gesture.deltaY) * 10;
        var speedX = (e.gesture.deltaX - this.attr.event.gesture.deltaX) * 10;
        this.attr.rot.x += -e.gesture.deltaY * e.gesture.velocityY - speedY;
        this.attr.rot.y += e.gesture.deltaX * e.gesture.velocityX + speedX;
        this.render();
    },

    // RESET 3D
    reset3d: function () {
        this.attr.rot.x = 0;
        this.attr.rot.y = 0;
        this.attr.rot.z = 0;
        this.render();
        this.attr.$el.removeClass( 'cube--exp cube--imp' );
        this.attr.$el.css('font-size', "12em");
    },

    // SIZE CUBE
    sizeCube: function ( value ) {
        this.attr.$el.css('font-size', value + "em");
    },

    // CHANGE THEME
    changeTheme: function ( value ) {
        this.attr.$el.removeClass( 'cube--dee cube--border cube--color-red cube--color-gray' );
        this.attr.$el.addClass( value );
    },

    // EXPLOSE CUBE
    explose3d: function () {
        this.attr.$el.removeClass( 'cube--imp' );
        this.attr.$el.toggleClass( 'cube--exp' );
    },

    // IMPLOSE CUBE
    implose3d: function () {
        this.attr.$el.removeClass( 'cube--exp' );
        this.attr.$el.toggleClass( 'cube--imp' );
    },
}