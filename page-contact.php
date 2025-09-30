<?php
get_header();
?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <section class="contact-hero">
            <div class="container">
                <h1>Contact Us</h1>
                <p>We'd love to hear from you!</p>
            </div>
        </section>

        <section class="contact-form-section">
            <div class="container">
                <form action="" method="post" class="contact-form">
                    <p>
                        <label for="name">Your Name:</label>
                        <input type="text" id="name" name="name" required>
                    </p>
                    <p>
                        <label for="email">Your Email:</label>
                        <input type="email" id="email" name="email" required>
                        </p>
                    <p>
                        <label for="subject">Subject:</label>
                        <input type="text" id="subject" name="subject" required>
                    </p>
                    <p>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </p>
                    <p>
                        <input type="text" name="submit_contact" style="Send Message">
                    </p>
                </form>
            </div>
        </section>
    </main>
</div>
<?php get_footer(); ?>



       