<?php $this->assign('title', 'Skin'); ?>
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Skin Settings</h5>
            </div>
            <div class="ibox-content">
                <div class="setings-item">
                    <span>
                        Skin 1
                    </span>

                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="skin1" class="onoffswitch-checkbox" id="skin1">
                            <label class="onoffswitch-label" for="skin1">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Skin 2
                    </span>

                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="skin2" class="onoffswitch-checkbox" id="skin2">
                            <label class="onoffswitch-label" for="skin2">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="setings-item">
                    <span>
                        Skin 3
                    </span>

                    <div class="switch">
                        <div class="onoffswitch">
                            <input type="checkbox" name="skin3" class="onoffswitch-checkbox" id="skin3">
                            <label class="onoffswitch-label" for="skin3">
                                <span class="onoffswitch-inner"></span>
                                <span class="onoffswitch-switch"></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

 <?php $this->append('script_body'); ?>
    <script>
        // Config box
        $('#skin1').click(function (){
            if ($('#skin1').is(':checked')){
                $('#skin2').prop('checked', false);
                $('#skin3').prop('checked', false);
                $("body").removeClass('skin-2');
                $("body").removeClass('skin-3');
                $("body").addClass('skin-1');

                if (localStorageSupport){
                    localStorage.setItem("skin2",'off');
                    localStorage.setItem("skin3",'off');
                    localStorage.setItem("skin1",'on');
                }
            } else{
                $("body").removeClass('skin-1');

                if (localStorageSupport){
                    localStorage.setItem("skin1",'off');
                }
            }
        });
        $('#skin2').click(function (){
            if ($('#skin2').is(':checked')){
                $('#skin1').prop('checked', false);
                $('#skin3').prop('checked', false);
                $("body").removeClass('skin-1');
                $("body").removeClass('skin-3');
                $("body").addClass('skin-2');

                if (localStorageSupport){
                    localStorage.setItem("skin1",'off');
                    localStorage.setItem("skin3",'off');
                    localStorage.setItem("skin2",'on');
                }
            } else{
                $("body").removeClass('skin-2');

                if (localStorageSupport){
                    localStorage.setItem("skin2",'off');
                }
            }
        });
        $('#skin3').click(function (){
            if ($('#skin3').is(':checked')){
                $('#skin1').prop('checked', false);
                $('#skin2').prop('checked', false);
                $("body").removeClass('skin-1');
                $("body").removeClass('skin-2');
                $("body").addClass('skin-3');

                if (localStorageSupport){
                    localStorage.setItem("skin1",'off');
                    localStorage.setItem("skin2",'off');
                    localStorage.setItem("skin3",'on');
                }
            } else{
                $("body").removeClass('skin-3');

                if (localStorageSupport){
                    localStorage.setItem("skin3",'off');
                }
            }
        });

        if (localStorageSupport){
            var skin1 = localStorage.getItem("skin1");
            var skin2 = localStorage.getItem("skin2");
            var skin3 = localStorage.getItem("skin3");

            if (skin1 == 'on')
                $('#skin1').prop('checked','checked')
            if (skin2 == 'on')
                $('#skin2').prop('checked','checked')
            if (skin3 == 'on')
                $('#skin3').prop('checked','checked')
        }
        
    </script>
<?php $this->end(); ?>