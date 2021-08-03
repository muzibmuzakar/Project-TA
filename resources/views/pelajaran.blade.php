@extends('layouts.main')

@section('main')
    
    <!-- ======= card Details Pelajaran Section ======= -->
    <div class="container card-pelajaran">
      <div class="big">
        <article class="pelajaran">
          <div class="pelajaran-box">
            <img src="https://brotokoll.com/wp-content/uploads/2019/12/xPSX_20190928_134709.jpg.pagespeed.ic.qsjw5ilFw5.jpg" width="1500" height="1368" alt="">
          </div>
          <div class="pelajaran-content">      
            <h1 class="pelajaran-title"><a href="#">Gluten Free Pan pelajaran</a></h1>
      
            <p class="pelajaran-metadata">
              <span class="pelajaran-rating">★★★★<span>☆</span></span>
              <span class="pelajaran-votes">(12 votes)</span>
            </p>
      
            <p class="pelajaran-desc">It really is possible to make excellent gluten free pelajaran at home in your own oven with our pelajarans and techniques.</p>
      
            <button class="pelajaran-save" type="button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="#000000"><path d="M 6.0097656 2 C 4.9143111 2 4.0097656 2.9025988 4.0097656 3.9980469 L 4 22 L 12 19 L 20 22 L 20 20.556641 L 20 4 C 20 2.9069372 19.093063 2 18 2 L 6.0097656 2 z M 6.0097656 4 L 18 4 L 18 19.113281 L 12 16.863281 L 6.0019531 19.113281 L 6.0097656 4 z" fill="currentColor"/></svg>
              Save
            </button>
      
          </div>
        </article>
      </div>
    </div>
    
<style>
  body{
    background-color: #f6f9fe;
  }
  .pelajaran,
  .pelajaran-box {
    width: 1080px;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    box-shadow: 0 .15rem 1.75rem 0 rgba(58,59,69,.15);
    background-color: #fff;
  }

  .pelajaran-box {
    flex: 3 1 30ch;
    height: calc(282px + 5vw);
    overflow: hidden;
  }
  .pelajaran-box img {
    max-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    -o-object-fit: cover;
      object-fit: cover;
    -o-object-position: 50% 50%;
      object-position: 50% 50%;
  }

  .pelajaran {
    border: 2px solid #F2F2F2;
    border-radius: 8px;
    overflow: hidden;
  }
  .pelajaran-content {
    padding: 16px 32px;
    flex: 4 1 40ch;
  }
  .pelajaran-title {
    margin: 0;
    font-size: clamp(1.4em, 2.1vw, 2.1em);
    color: #222222;
  }
  .pelajaran-title a {
    text-decoration: none;
    color: inherit;
  }
  .pelajaran-metadata {
    margin: 0;
  }
  .pelajaran-rating {
    font-size: 1.2em;
    letter-spacing: 0.05em;
    color: var(--primary);
  }
  .pelajaran-rating span {
    color: var(--grey);
  }
  .pelajaran-votes {
    font-size: 0.825em;
    font-style: italic;
    color: var(--lightgrey);
  }
  .pelajaran-save {
    display: flex;
    align-items: center;
    padding: 6px 14px 6px 12px;
    border-radius: 4px;
    border: 2px solid currentColor;
    color: var(--primary);
    background: none;
    cursor: pointer;
    font-weight: bold;
  }
  .pelajaran-save svg {
    margin-right: 6px;
  }


  .big {
    width: clamp(320px, 65%, 65%);
    /* padding: 24px; */
  }
  @media(max-width:786px){
    .big {
      padding-top: 20px;
    }
    .card-pelajaran{
      margin-top: 50px;
    }
  }
  @media(min-width:786px){
    .big {
    padding-top: 50px;
    }
    .card-pelajaran{
      margin-top: 70px;
    }
  }
</style>

@endsection