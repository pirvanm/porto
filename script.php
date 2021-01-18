<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<script>
    // https://stackoverflow.com/questions/9446318/bootstrap-tooltips-not-working
    // e bine sa faci research promit :)!
    $(document).ready(function() {
        $("body").tooltip({
            selector: '[data-toggle=tooltip]'
        });
    });

    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<script>
function keyPressed(e) {
    var srcElement = e.target;    // get the element that fired the onkeydown function
    var dataset = false;
    var selectList = false;
    var next = "";
    var prev = "";
    if (srcElement.dataset) {        // can we use HTML5 dataset?
        dataset = true;              // remember for later
        // is this an element for which we care
        if (srcElement.dataset.selectlist == 'true') {
            selectList = true;
        }
    } else {    // can't use HTML5 dataset, use getAttribute
        if (srcElement.getAttribute('data-selectlist') == 'true') {
            selectList = true;
        }
    }
    // is it a select element and the user pressed either up arrow or down arrow
    if (selectList && (e.keyCode == '38' || e.keyCode == '40')) {
        // get the next and prev navigation options for this element
        if (dataset) {
            next = srcElement.dataset.next;
            prev = srcElement.dataset.prev;
        } else {
            next = srcElement.getAttribute('data-next');
            prev = srcElement.getAttribute('data-prev');
        }
        // up arrow was pressed and a prev element is defined
        if (e.keyCode == '38' && prev != '') {
            document.getElementById(prev).focus();
        }
        // down arrow was pressed and a next element is defined
        if (e.keyCode == '40' && next != '') {
            document.getElementById(next).focus();
        }
        // don't do native processing of the up or down arrow (page scrolling)
        e.preventDefault;
    }
}
document.onkeydown = keyPressed;
</script>