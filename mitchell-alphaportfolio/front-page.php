<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Alpha-Portfolio
 */

get_header(); ?>

      <main>
          <section id="mini-skills" class="dark">
            <h3><span>Skills</span></h3>
            <div>
              <div class="col">
                <span class="icon icon_design"></span>
                <span class="title">UI/UX Design</span>
                <p>Applying visual principles to plan a user journey and crafting functional and interactive interfaces that leave a lasting impression.</p>
              </div>
              <div class="col">
                <span class="icon icon_coding"></span>
                <span class="title">Coding</span>
                <p>Developing scalable and reliable web or software based applications to meet specific needs while employing new and agile technologies. </p>
              </div>
              <div class="col">
                <span class="icon icon_team"></span>
                <span class="title">Team Orintated</span>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis vel nisi venenatis, congue magna sed, porttitor ipsum. Aenean nec velit. </p>
              </div>
              <div class="col">
                <span class="icon icon_cc"></span>
                <span class="title">Content Creation</span>
                <p>Using a buffet of tools to craft rich content that compliments the project at hand. </p>
              </div>
            </div>
          </section>
          <section id="featured-projects">
            <h3><span>Some of my latest work</span></h3>
            <div class="owl-carousel owl-theme">
              <div><a href="#"><img src="http://fillmurray.com/400/300" alt="" /></a></div>
              <div><a href="#"><img src="http://fillmurray.com/400/300" alt="" /></a></div>
              <div><a href="#"><img src="http://fillmurray.com/400/300" alt="" /></a></div>
            </div>
          </section>
          <section id="mini-timeline" class="dark hidden">
            <h3><span>Timeline</span></h3>
            <p class="desc"></p>
          </section>
          <section id="mini-contact" class="dark">
            <h3><span>Say Hi!</span></h3>
              <div class="comment">
              <p>Send me a message, I would love to hear from you.</p>
              </div>
              <div id="comment_form">
                <div>
                  <input name="name" id="name" value="" placeholder="Name" type="text">
                </div>
                <div>
                  <input name="email" id="email" value="" placeholder="Email" type="email">
                </div>
                <div>
                  <textarea rows="10" name="comment" id="comment" placeholder="Comment"></textarea>
                </div>
                <div>
                  <input name="submit" value="Submit" type="submit">
                </div>
              </div>
          </section>
        </main>
        <section id="intro">
          <h1>Hi! My name is Mitchell.<br />I am a <span id="typer"></span></h1>
          <div id="before-after">
             <img src="http://cdn.mitchell-williams.com.au/alpha-portfolio/img/intro_artistic.jpg" alt="Man overlooking city" />
             <img src="http://cdn.mitchell-williams.com.au/alpha-portfolio/img/intro_normal.jpg" alt="Man overlooking city presented as oil painted" />
             <span class="prompt"> &lt;- Slide, to see the world through my eyes. </span>
          </div>
          <div class="scroll"><span class="icon animated pulse infinite"></span></div>
        </section>

<?php
get_footer();
