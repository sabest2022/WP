<aside id="secondary" class="col-xs-12 col-md-3">
    <div id="sidebar">
        <ul>
            <li>
                <form id="searchform" class="searchform">
                    <div>
                        <?php get_search_form() ?>
                    </div>
                </form>
            </li>
        </ul>
        <ul role="navigation">
            <li class="pagenav">
                <?php dynamic_sidebar('aside-1') ?>
            </li>
            <li>
                <?php dynamic_sidebar('aside-2') ?>
            </li>
            <li class="categories">
                <?php dynamic_sidebar('aside-3') ?>
        </ul>
        </li>
        </ul>
    </div>
</aside>