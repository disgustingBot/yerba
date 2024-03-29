
<?php get_header(); ?>

<?php while(have_posts()){the_post(); ?>






  <?php

      // Get current page URL
      $sb_url = urlencode(get_permalink());

      // Get current page title
      $sb_title = str_replace( ' ', '%20', get_the_title());

      // Construct sharing URL without using any script
      $twitterURL = 'https://twitter.com/intent/tweet?text='.$sb_title.'&amp;url='.$sb_url.'&amp;via=wpvkp';
      $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$sb_url;
      $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$sb_url.'&amp;title='.$sb_title;
   ?>








<figure class="singleATF grid">
  <img class="singleATFImg rowcol1 lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="">
  <figcaption class="imgAuthor rowcol1">
    <p>
      <span><em><?php the_author(); ?></em></span>
      <span>&nbsp/&nbsp</span>
      <span><?php echo excerpt(60); ?></span>
    </p>
  </figcaption>
</figure>

<section class="section singleContent">
  <div class="theContent">
      <?php if(function_exists('yoast_breadcrumb')){yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>
    <div class="singleTitleContainer">
      <h1 class="singleTitle"><?php the_title(); ?></h1>
      <div class="singleTitleInfo">
        <h4 class="singleTitleInfoTxt">
          <span class="theDate"><?php the_date(); ?></span> /
          <span class="theAuthor"><?php the_author(); ?></span>
          <span class="theCategory"><br><?php the_category(); ?></span>
        </h4>
        <div class="singleSocialContainer">
          <a href="<?php echo $facebookURL; ?>" target="_blank">
            <svg class="facebookFooter" class="" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
               width="38.061px" height="38.061px" viewBox="0 0 38.061 38.061" enable-background="new 0 0 38.061 38.061" xml:space="preserve">
              <g id="XMLID_1693_">
                <path id="XMLID_1695_" fill="currentColor" d="M19.031,38.061L19.031,38.061C8.521,38.061,0,29.541,0,19.03l0,0C0,8.52,8.521,0,19.031,0
                l0,0c10.51,0,19.03,8.52,19.03,19.03l0,0C38.061,29.541,29.541,38.061,19.031,38.061z"/>
                <path id="XMLID_1694_" fill="#FFFFFF" d="M16.131,30.534h4.632V18.933h3.232l0.345-3.884h-3.577c0,0,0-1.45,0-2.212
                c0-0.916,0.184-1.278,1.07-1.278c0.712,0,2.507,0,2.507,0V7.527c0,0-2.644,0-3.208,0c-3.447,0-5.001,1.519-5.001,4.424
                c0,2.531,0,3.097,0,3.097h-2.41v3.933h2.41V30.534z"/>
              </g>
            </svg>
          </a>
          <a href="<?php echo $twitterURL; ?>" target="_blank">
            <svg class="twitterFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            width="38.061px" height="38.061px" viewBox="0 0 38.061 38.061" enable-background="new 0 0 38.061 38.061" xml:space="preserve">
              <g id="XMLID_1723_">
                <path id="XMLID_1725_" fill="currentColor" d="M19.03,38.061L19.03,38.061C8.52,38.061,0,29.541,0,19.03l0,0C0,8.52,8.52,0,19.03,0l0,0
                c10.511,0,19.03,8.52,19.03,19.03l0,0C38.061,29.541,29.541,38.061,19.03,38.061z"/>
                <path id="XMLID_1724_" fill="#FFFFFF" d="M8.891,25.401c1.841,1.181,4.028,1.869,6.377,1.869c7.724,0,12.088-6.523,11.826-12.376
                c0.813-0.586,1.518-1.318,2.076-2.153c-0.746,0.331-1.549,0.555-2.39,0.655c0.858-0.514,1.519-1.33,1.829-2.302
                c-0.805,0.477-1.695,0.823-2.642,1.01c-0.759-0.809-1.841-1.314-3.038-1.314c-2.685,0-4.658,2.506-4.052,5.108
                c-3.458-0.173-6.523-1.83-8.575-4.347c-1.09,1.871-0.565,4.317,1.288,5.555c-0.682-0.021-1.325-0.209-1.885-0.521
                c-0.044,1.928,1.336,3.73,3.337,4.133c-0.586,0.159-1.228,0.195-1.878,0.071c0.528,1.652,2.065,2.855,3.886,2.889
                C13.301,25.049,11.098,25.662,8.891,25.401z"/>
              </g>
            </svg>
          </a>
          <a href="https://www.instagram.com/calabassabeachclub/" target="_blank">
            <svg class="instagramFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	        width="38.062px" height="38.061px" viewBox="0 0 38.062 38.061" enable-background="new 0 0 38.062 38.061" xml:space="preserve">
              <g id="XMLID_1683_">
  	            <path id="XMLID_1692_" fill="currentColor" d="M19.03,38.061L19.03,38.061C8.52,38.061,0,29.541,0,19.03l0,0C0,8.52,8.52,0,19.03,0l0,0
  	           	c10.51,0,19.031,8.52,19.031,19.03l0,0C38.062,29.541,29.54,38.061,19.03,38.061z"/>
  	          <g id="XMLID_1684_">
  		          <path id="XMLID_1689_" fill="#FFFFFF" d="M19.03,10.476c2.786,0,3.116,0.011,4.217,0.061c1.017,0.046,1.569,0.216,1.938,0.359
  			        c0.486,0.189,0.834,0.415,1.199,0.78s0.592,0.713,0.781,1.2c0.143,0.368,0.313,0.92,0.359,1.938
  		        	c0.05,1.101,0.061,1.43,0.061,4.217c0,2.786-0.011,3.116-0.061,4.216c-0.047,1.018-0.217,1.57-0.359,1.938
  		        	c-0.189,0.487-0.416,0.835-0.781,1.2c-0.365,0.364-0.713,0.591-1.199,0.78c-0.368,0.143-0.921,0.313-1.938,0.359
  		        	c-1.101,0.051-1.43,0.061-4.217,0.061c-2.786,0-3.116-0.01-4.216-0.061c-1.017-0.047-1.57-0.217-1.938-0.359
  		        	c-0.487-0.189-0.834-0.416-1.2-0.78c-0.365-0.365-0.591-0.713-0.781-1.2c-0.143-0.367-0.313-0.92-0.359-1.938
  		        	c-0.05-1.1-0.061-1.43-0.061-4.216c0-2.787,0.011-3.116,0.061-4.217c0.047-1.018,0.217-1.57,0.359-1.938
  		        	c0.189-0.487,0.416-0.834,0.781-1.2s0.712-0.591,1.2-0.78c0.368-0.143,0.92-0.313,1.938-0.359
  		        	C15.914,10.487,16.244,10.476,19.03,10.476 M19.03,8.596c-2.834,0-3.189,0.012-4.302,0.063c-1.11,0.051-1.869,0.228-2.533,0.485
  			        c-0.686,0.267-1.268,0.623-1.848,1.203s-0.937,1.162-1.203,1.849c-0.258,0.664-0.435,1.422-0.485,2.533
  			        c-0.051,1.113-0.063,1.468-0.063,4.302c0,2.833,0.012,3.188,0.063,4.302c0.051,1.111,0.227,1.869,0.485,2.533
  			        c0.266,0.686,0.623,1.268,1.203,1.848s1.162,0.938,1.848,1.203c0.664,0.258,1.422,0.436,2.533,0.486
  			        c1.113,0.051,1.468,0.063,4.302,0.063s3.189-0.012,4.303-0.063c1.11-0.051,1.869-0.229,2.532-0.486
  			        c0.687-0.266,1.269-0.623,1.849-1.203s0.937-1.162,1.203-1.848c0.258-0.664,0.435-1.422,0.485-2.533
  			        c0.05-1.113,0.063-1.469,0.063-4.302c0-2.834-0.013-3.189-0.063-4.302c-0.051-1.111-0.228-1.869-0.485-2.533
  			        c-0.267-0.687-0.623-1.269-1.203-1.849s-1.162-0.937-1.849-1.203c-0.663-0.258-1.422-0.435-2.532-0.485
  			        C22.22,8.608,21.864,8.596,19.03,8.596"/>
  		          <path id="XMLID_1686_" fill="#FFFFFF" d="M19.03,13.672c-2.959,0-5.358,2.399-5.358,5.358c0,2.959,2.399,5.358,5.358,5.358
  			        s5.358-2.399,5.358-5.358C24.389,16.071,21.989,13.672,19.03,13.672 M19.03,22.508c-1.921,0-3.478-1.557-3.478-3.478
  		        	c0-1.921,1.557-3.479,3.478-3.479s3.479,1.557,3.479,3.479C22.509,20.952,20.951,22.508,19.03,22.508"/>
  		          <path id="XMLID_1685_" fill="#FFFFFF" d="M25.853,13.46c0,0.691-0.561,1.252-1.252,1.252s-1.252-0.561-1.252-1.252
  			        s0.561-1.252,1.252-1.252S25.853,12.769,25.853,13.46"/>
  	          </g>
            </g>
            </svg>
          </a>
          <a href="https://www.pinterest.es/CBbCGroup/" target="_blank">
            <svg class="googleFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
  	        width="38.062px" height="38.061px" viewBox="0 0 38.062 38.061" enable-background="new 0 0 38.062 38.061" xml:space="preserve">
              <g id="XMLID_1678_">
  	            <path id="XMLID_1680_" fill="currentColor" d="M19.03,38.061L19.03,38.061C8.52,38.061,0,29.541,0,19.031l0,0C0,8.521,8.52,0,19.03,0
  	            l0,0c10.51,0,19.031,8.521,19.031,19.031l0,0C38.062,29.541,29.54,38.061,19.03,38.061z"/>
  	            <path id="XMLID_1679_" fill="#FFFFFF" d="M12.94,20.798c0.297,0.122,0.563,0.006,0.65-0.324c0.059-0.228,0.201-0.803,0.265-1.042
  		          c0.087-0.326,0.053-0.439-0.187-0.723c-0.522-0.617-0.856-1.416-0.856-2.546c0-3.281,2.455-6.218,6.392-6.218
  		          c3.486,0,5.401,2.13,5.401,4.976c0,3.743-1.657,6.902-4.116,6.902c-1.358,0-2.374-1.123-2.049-2.5
  		          c0.392-1.645,1.146-3.42,1.146-4.607c0-1.063-0.57-1.949-1.75-1.949c-1.389,0-2.504,1.437-2.504,3.36
  		          c0,1.225,0.415,2.055,0.415,2.055s-1.421,6.02-1.67,7.074c-0.497,2.1-0.075,4.674-0.039,4.934c0.021,0.154,0.219,0.19,0.309,0.074
  		          c0.128-0.167,1.782-2.209,2.343-4.248c0.16-0.578,0.914-3.568,0.914-3.568c0.451,0.86,1.77,1.617,3.171,1.617
  		          c4.174,0,7.004-3.804,7.004-8.897c0-3.851-3.26-7.438-8.218-7.438c-6.168,0-9.279,4.422-9.279,8.11
  		          C10.282,18.073,11.127,20.059,12.94,20.798z"/>
              </g>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="theContentContainer">
      <?php the_content(); ?>
    </div>

    <div class="singleSocialContainer altSocial">

      <a href="<?php echo $facebookURL; ?>" target="_blank">
        <svg class="facebookFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
           width="38.061px" height="38.061px" viewBox="0 0 38.061 38.061" enable-background="new 0 0 38.061 38.061" xml:space="preserve">
          <g id="XMLID_1693_">
            <path id="XMLID_1695_" fill="currentColor" d="M19.031,38.061L19.031,38.061C8.521,38.061,0,29.541,0,19.03l0,0C0,8.52,8.521,0,19.031,0
            l0,0c10.51,0,19.03,8.52,19.03,19.03l0,0C38.061,29.541,29.541,38.061,19.031,38.061z"/>
            <path id="XMLID_1694_" fill="#FFFFFF" d="M16.131,30.534h4.632V18.933h3.232l0.345-3.884h-3.577c0,0,0-1.45,0-2.212
            c0-0.916,0.184-1.278,1.07-1.278c0.712,0,2.507,0,2.507,0V7.527c0,0-2.644,0-3.208,0c-3.447,0-5.001,1.519-5.001,4.424
            c0,2.531,0,3.097,0,3.097h-2.41v3.933h2.41V30.534z"/>
          </g>
        </svg>
      </a>
      <a href="<?php echo $twitterURL; ?>" target="_blank">
        <svg class="twitterFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="38.061px" height="38.061px" viewBox="0 0 38.061 38.061" enable-background="new 0 0 38.061 38.061" xml:space="preserve">
          <g id="XMLID_1723_">
            <path id="XMLID_1725_" fill="currentColor" d="M19.03,38.061L19.03,38.061C8.52,38.061,0,29.541,0,19.03l0,0C0,8.52,8.52,0,19.03,0l0,0
            c10.511,0,19.03,8.52,19.03,19.03l0,0C38.061,29.541,29.541,38.061,19.03,38.061z"/>
            <path id="XMLID_1724_" fill="#FFFFFF" d="M8.891,25.401c1.841,1.181,4.028,1.869,6.377,1.869c7.724,0,12.088-6.523,11.826-12.376
            c0.813-0.586,1.518-1.318,2.076-2.153c-0.746,0.331-1.549,0.555-2.39,0.655c0.858-0.514,1.519-1.33,1.829-2.302
            c-0.805,0.477-1.695,0.823-2.642,1.01c-0.759-0.809-1.841-1.314-3.038-1.314c-2.685,0-4.658,2.506-4.052,5.108
            c-3.458-0.173-6.523-1.83-8.575-4.347c-1.09,1.871-0.565,4.317,1.288,5.555c-0.682-0.021-1.325-0.209-1.885-0.521
            c-0.044,1.928,1.336,3.73,3.337,4.133c-0.586,0.159-1.228,0.195-1.878,0.071c0.528,1.652,2.065,2.855,3.886,2.889
            C13.301,25.049,11.098,25.662,8.891,25.401z"/>
          </g>
        </svg>
      </a>
      <a href="https://www.instagram.com/calabassabeachclub/" target="_blank">
        <svg class="instagramFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="38.062px" height="38.061px" viewBox="0 0 38.062 38.061" enable-background="new 0 0 38.062 38.061" xml:space="preserve">
          <g id="XMLID_1683_">
            <path id="XMLID_1692_" fill="currentColor" d="M19.03,38.061L19.03,38.061C8.52,38.061,0,29.541,0,19.03l0,0C0,8.52,8.52,0,19.03,0l0,0
            c10.51,0,19.031,8.52,19.031,19.03l0,0C38.062,29.541,29.54,38.061,19.03,38.061z"/>
          <g id="XMLID_1684_">
            <path id="XMLID_1689_" fill="#FFFFFF" d="M19.03,10.476c2.786,0,3.116,0.011,4.217,0.061c1.017,0.046,1.569,0.216,1.938,0.359
            c0.486,0.189,0.834,0.415,1.199,0.78s0.592,0.713,0.781,1.2c0.143,0.368,0.313,0.92,0.359,1.938
            c0.05,1.101,0.061,1.43,0.061,4.217c0,2.786-0.011,3.116-0.061,4.216c-0.047,1.018-0.217,1.57-0.359,1.938
            c-0.189,0.487-0.416,0.835-0.781,1.2c-0.365,0.364-0.713,0.591-1.199,0.78c-0.368,0.143-0.921,0.313-1.938,0.359
            c-1.101,0.051-1.43,0.061-4.217,0.061c-2.786,0-3.116-0.01-4.216-0.061c-1.017-0.047-1.57-0.217-1.938-0.359
            c-0.487-0.189-0.834-0.416-1.2-0.78c-0.365-0.365-0.591-0.713-0.781-1.2c-0.143-0.367-0.313-0.92-0.359-1.938
            c-0.05-1.1-0.061-1.43-0.061-4.216c0-2.787,0.011-3.116,0.061-4.217c0.047-1.018,0.217-1.57,0.359-1.938
            c0.189-0.487,0.416-0.834,0.781-1.2s0.712-0.591,1.2-0.78c0.368-0.143,0.92-0.313,1.938-0.359
            C15.914,10.487,16.244,10.476,19.03,10.476 M19.03,8.596c-2.834,0-3.189,0.012-4.302,0.063c-1.11,0.051-1.869,0.228-2.533,0.485
            c-0.686,0.267-1.268,0.623-1.848,1.203s-0.937,1.162-1.203,1.849c-0.258,0.664-0.435,1.422-0.485,2.533
            c-0.051,1.113-0.063,1.468-0.063,4.302c0,2.833,0.012,3.188,0.063,4.302c0.051,1.111,0.227,1.869,0.485,2.533
            c0.266,0.686,0.623,1.268,1.203,1.848s1.162,0.938,1.848,1.203c0.664,0.258,1.422,0.436,2.533,0.486
            c1.113,0.051,1.468,0.063,4.302,0.063s3.189-0.012,4.303-0.063c1.11-0.051,1.869-0.229,2.532-0.486
            c0.687-0.266,1.269-0.623,1.849-1.203s0.937-1.162,1.203-1.848c0.258-0.664,0.435-1.422,0.485-2.533
            c0.05-1.113,0.063-1.469,0.063-4.302c0-2.834-0.013-3.189-0.063-4.302c-0.051-1.111-0.228-1.869-0.485-2.533
            c-0.267-0.687-0.623-1.269-1.203-1.849s-1.162-0.937-1.849-1.203c-0.663-0.258-1.422-0.435-2.532-0.485
            C22.22,8.608,21.864,8.596,19.03,8.596"/>
            <path id="XMLID_1686_" fill="#FFFFFF" d="M19.03,13.672c-2.959,0-5.358,2.399-5.358,5.358c0,2.959,2.399,5.358,5.358,5.358
            s5.358-2.399,5.358-5.358C24.389,16.071,21.989,13.672,19.03,13.672 M19.03,22.508c-1.921,0-3.478-1.557-3.478-3.478
            c0-1.921,1.557-3.479,3.478-3.479s3.479,1.557,3.479,3.479C22.509,20.952,20.951,22.508,19.03,22.508"/>
            <path id="XMLID_1685_" fill="#FFFFFF" d="M25.853,13.46c0,0.691-0.561,1.252-1.252,1.252s-1.252-0.561-1.252-1.252
            s0.561-1.252,1.252-1.252S25.853,12.769,25.853,13.46"/>
          </g>
        </g>
        </svg>
      </a>
      <a href="https://www.pinterest.es/CBbCGroup/" target="_blank">
        <svg class="pinterestFooter" version="1.0" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="38.062px" height="38.061px" viewBox="0 0 38.062 38.061" enable-background="new 0 0 38.062 38.061" xml:space="preserve">
          <g id="XMLID_1678_">
            <path id="XMLID_1680_" fill="currentColor" d="M19.03,38.061L19.03,38.061C8.52,38.061,0,29.541,0,19.031l0,0C0,8.521,8.52,0,19.03,0
            l0,0c10.51,0,19.031,8.521,19.031,19.031l0,0C38.062,29.541,29.54,38.061,19.03,38.061z"/>
            <path id="XMLID_1679_" fill="#FFFFFF" d="M12.94,20.798c0.297,0.122,0.563,0.006,0.65-0.324c0.059-0.228,0.201-0.803,0.265-1.042
            c0.087-0.326,0.053-0.439-0.187-0.723c-0.522-0.617-0.856-1.416-0.856-2.546c0-3.281,2.455-6.218,6.392-6.218
            c3.486,0,5.401,2.13,5.401,4.976c0,3.743-1.657,6.902-4.116,6.902c-1.358,0-2.374-1.123-2.049-2.5
            c0.392-1.645,1.146-3.42,1.146-4.607c0-1.063-0.57-1.949-1.75-1.949c-1.389,0-2.504,1.437-2.504,3.36
            c0,1.225,0.415,2.055,0.415,2.055s-1.421,6.02-1.67,7.074c-0.497,2.1-0.075,4.674-0.039,4.934c0.021,0.154,0.219,0.19,0.309,0.074
            c0.128-0.167,1.782-2.209,2.343-4.248c0.16-0.578,0.914-3.568,0.914-3.568c0.451,0.86,1.77,1.617,3.171,1.617
            c4.174,0,7.004-3.804,7.004-8.897c0-3.851-3.26-7.438-8.218-7.438c-6.168,0-9.279,4.422-9.279,8.11
            C10.282,18.073,11.127,20.059,12.94,20.798z"/>
          </g>
        </svg>
      </a>
    </div>
    <div class="theTags">
      <?php echo get_the_tag_list(); ?>
    </div>
  </div>
  <div class="singleBanner">
    <?php echo do_shortcode('[the_ad id="253"]'); ?>
  </div>

</section>

<flex class="colMax articulosRelacionados">
  <h4 class="relacionadosTitle"><span class="blueTxt">Artículos relacionados</span> / más del autor</h4>
  <?php $i=0;
  $related = gp_get_related_posts( get_the_ID(), 3 );
  if ( $related->have_posts() ): ?>

    <?php while($related->have_posts()): $related->the_post(); ?>
      <figure class="standarCard">
        <a class="standarCardImg" href="<?php the_permalink(); ?>"><img class="standarCardImg lazy" data-url="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt=""></a>
        <figcaption class="standarCardCaption">
          <h5 class="standarCardTitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
          <p class="standarCardTxt">
            <a href="<?php the_permalink(); ?>"><?php echo excerpt(65); ?></a>
          </p>
        </figcaption>
      </figure>
    <?php endwhile; ?>
  <?php endif; wp_reset_postdata(); ?>
</flex>





    <div style="display:none"><?php comments_template(); ?></div>
    <!-- .comment-list -->
    <ul class="comment-list comments">
      <?php wp_list_comments(array('callback' => 'better_comments')); ?>
    </ul>

    <?php if(function_exists('the_ratings')) { the_ratings(); } ?>


    <?php
    $fields   = array(
    'author' => '<input id="author" name="author" type="text" placeholder="Nombre' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $html_req . ' />',
    'email'  => '<input id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' placeholder="eMail' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $html_req . ' />',
    'url'    => '<input id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' placeholder="Web' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" maxlength="200" />',
    );

    $args = array(
      'id_form'           => 'commentform',
      'class_form'        => 'comment-form',
      'id_submit'         => 'submit',
      'class_submit'      => 'submit',
      'name_submit'       => 'submit',
      'title_reply'       => __( 'comparte tus opiniones' ),
      'title_reply_to'    => __( 'respondele a %s' ),
      'cancel_reply_link' => __( 'Cancelar respuesta' ),
      'label_submit'      => __( 'Publicar comentario' ),
      'format'            => 'xhtml',

      'comment_field' =>  '<textarea id="comment" name="comment" cols="45" rows="8" aria-required="true">' .
        '</textarea>',

      'must_log_in' => '<p class="must-log-in">' .
        sprintf(
          __( 'Para comentar debes <a href="%s">iniciar sesion</a>.' ),
          wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
        ) . '</p>',

      'logged_in_as' => '<p class="logged-in-as">' .
        sprintf(
        __( 'Has iniciado sesion como: <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Cerrar la sesion?</a>' ),
          admin_url( 'profile.php' ),
          $user_identity,
          wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
        ) . '</p>',

      // 'comment_notes_before' => '<p class="comment-notes">' .
      // __( 'Tu e-mail no será publicado.' ) . ( $req ? $required_text : '' ) .
      // '</p>',

      'comment_notes_before' => '',
      'comment_notes_after'  => '',

      'fields' => apply_filters( 'comment_form_default_fields', $fields ),
    );
    comment_form($args);
    ?>



<?php } wp_reset_query(); ?>
<?php get_footer(); ?>
