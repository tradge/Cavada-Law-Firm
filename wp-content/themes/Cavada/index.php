<?php /* Template Name: Main Index Page Template */
get_header(); ?>
<body>
<div class="container-fluid section-1">
    <div class="container">
        <div class="row">
            <h1>"We are a debt relief law firm. We help people file for bankruptcy relief under the bankruptcy code."</h1>
            <div class="col-xs-12 col-lg-6 col-md-offset-6">
                <h2>RELAX FOR JUST A SECOND.</h2>
                <p>
                We have consulted with enough people over the years to know that the word “Bankruptcy” can create lots of anxiety. It can effect your personal life, marriage, your job, but most importantly your self esteem. But we want you to know that the intent of bankruptcy is to get you out of a crushing financial situation, so you can be more productive and move on with integrity and dignity in a life free from the burden of debt.
                </p>
            
            </div>    
        </div>
        <div class="col-xs-12 col-lg-6 float-left financial-psychologist">
            <h2>"Financial Psychologist"</h2>
            <p>
                We've helped thousands of people get things back on track after going through tough financial challenges. We sit with you for as long as it takes to go over the options that are best for you. We give you honest answers. Bankruptcy is not the perfect solution for everyone, but we will help you make the best decision for debt relief. We put the “counselor” in Legal Counsel.
            </p>
        </div>
    </div>
</div>
<div class="container-fluid section-2">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6 col-lg-offset-6">
                <h2>
                    Complete Bankruptcy Services
                </h2>
                <p>
                    Debt problems are different for everyone who has them. Before making a decision, know the facts.
                </p>
                <h2>
                    Chapter 7 consumer and business
                </h2>
                <p>
                    For the most part, bankruptcies can be divided into two types -- liquidation and reorganization. Chapter 7 comes under the liquidation category. It's called liquidation because the bankruptcy trustee may take and sell ("liquidate") some of your property to pay back some of your debt. In return, most or all of your unsecured debts (debts for which collateral has not been pledged) will be erased. You get to keep any property that is classified as exempt under the state or federal laws. Not everyone can file for Chapter 7 bankruptcy. For example, if your disposable income is sufficient to fund a Chapter 13 repayment plan -- after subtracting certain allowed expenses and monthly payments for certain debts -- you won't be allowed to use Chapter 7 bankruptcy.
                </p>
                <div class="chapter-13-section">
                    <h2>
                    Chapter 13 consumer
                    </h2>
                    <p>
                    There are several types of reorganization bankruptcies, but Chapter 13 is the most common for consumers. Chapter 13 is also known as "wage earner" bankruptcy because, in order to file you must have a reliable source of income that you can use to repay some portion of your repayment. Under Chapter 13 you keep all of your property, but must make monthly payments over three to five years to repay all or some of your debt. The minimum amount you'll have to repay depends on how much you earn, how much you owe, and how much your unsecured creditors would have received if you'd filed for Chapter 7 bankruptcy
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid section-3">
    <div class="container text-center">
        <h2>
            Both Chapter 7 and Chapter 13 bankruptcy have many rules and exceptions to those rules regarding which debts are covered, who can file, and what property you can and cannot keep.
        </h2>
    </div>
</div>
<div class="container-fluid section-4 ">
    <div class="container text-center">
        <div class="col-xs-12 col-lg-10 col-lg-offset-1">
            <h2>
                Confused yet?
            </h2>
            <p>
            Don't be. Please give us a call today. We will help you make sense of this and any other financial or legal questions you might have. We want to help!
            </p>
        </div>
    </div>
</div>




<div class="container-fluid contact-section">
    <div class="container">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>
                <?php the_content(); ?>
                <?php endwhile; endif; ?>
    </div>
</div>
</body>
<?php get_footer(); ?>