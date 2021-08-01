@extends('layouts.main')

@section('main')
<section class="pembelajaran">
    <div class="container-fluid">
        <div class="belajar">
            <div class="row">
                <div class="col-md-9">        
                    <h3 class="text-center">HTML I : Pengenalan HTML</h3>
                    <div class="box-materi">
                        <img src="{{ asset('img/materi-05.svg')}}" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container">
                        <div class="textareacontainer">
                            <div class="textarea">
                                <div style="overflow:auto;">
                                    <div class="headerText">Edit This Code:</div>
                                    <button class="seeResult" type="button" onclick="submitTryit()">See Result &raquo;</button>
                                </div>
                                <div class="textareawrapper">
                                    <textarea autocomplete="off" class="code_input" id="textareaCode" wrap="logical" spellcheck="false"></textarea>
                                    <form autocomplete="off" style="margin:0px;display:none;">
                                    <input type="hidden" name="code" id="code" />
                                    <input type="hidden" id="bt" name="bt" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="iframecontainer">
                            <div class="iframe">
                                <div style="overflow:auto;">
                                    <div class="headerText">Result:</div>
                                </div>
                                <div id="iframewrapper" class="iframewrapper">
                                
                                </div>
                            </div>
                        </div>     
                    </div><script>submitTryit()</script>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    if (window.addEventListener) {              
        window.addEventListener("resize", browserResize);
    } else if (window.attachEvent) {                 
        window.attachEvent("onresize", browserResize);
    }
    var xbeforeResize = window.innerWidth;
    
    function browserResize() {
        var afterResize = window.innerWidth;
        if ((xbeforeResize < (970) && afterResize >= (970)) || (xbeforeResize >= (970) && afterResize < (970)) ||
            (xbeforeResize < (728) && afterResize >= (728)) || (xbeforeResize >= (728) && afterResize < (728)) ||
            (xbeforeResize < (468) && afterResize >= (468)) ||(xbeforeResize >= (468) && afterResize < (468))) {
            xbeforeResize = afterResize;
            googletag.cmd.push(function() {
                googletag.pubads().refresh([gptAdSlots[0]]);
            });
        }
    }
</script>
<script type="text/javascript">
    function submitTryit() {
      var text = document.getElementById("textareaCode").value;
      var ifr = document.createElement("iframe");
      ifr.setAttribute("frameborder", "0");
      ifr.setAttribute("id", "iframeResult");  
      document.getElementById("iframewrapper").innerHTML = "";
      document.getElementById("iframewrapper").appendChild(ifr);
      var ifrw = (ifr.contentWindow) ? ifr.contentWindow : (ifr.contentDocument.document) ? ifr.contentDocument.document : ifr.contentDocument;
      ifrw.document.open();
      ifrw.document.write(text);  
      ifrw.document.close();
    }
</script>
@endsection