<div class="col-lg-4 sidebar borderForStyle ">
    <div id="sd" class="">
        <h3>Ən son elanlar</h3>
        <?php foreach($event as $e){?>
        <div class="block-21 mb-4 d-flex">
            <a href="<?php echo base_url('blog_single/'.$e['id']); ?>">
                <img class="elan border-radius-10 borderColorGray"
                    src="<?php echo base_url('upload/events/'.$e['img']); ?>" />
            </a>
            <div class="text">
                <h3 class="heading ss"><a
                        href="<?php echo base_url('blog_single/'.$e['id']); ?>"><?php echo $e['title'];?></a></h3>
                <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span>
                            <?php echo date('d-m-Y', strtotime($e['date']));?></a></div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
    window.addEventListener('scroll', function() {
        let width = screen.width;
        if (window.scrollY > 445 && width > 1199) {
            document.getElementById('sd').classList.add('fixed-rs');
            // add padding top to show content behind navbar
        } else {
            document.getElementById('sd').classList.remove('fixed-rs');
            // remove padding top from body
        }

        if (window.scrollY > 480 && width > 991 && width < 1200) {
            document.getElementById('sd').classList.add('fixed-rst');
            // add padding top to show content behind navbar
        } else {
            document.getElementById('sd').classList.remove('fixed-rst');
            // remove padding top from body
        }

    });
});
</script>