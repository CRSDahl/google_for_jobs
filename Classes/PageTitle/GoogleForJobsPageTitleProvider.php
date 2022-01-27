<?php

declare(strict_types=1);

namespace Pegasus\GoogleForJobs\PageTitle;

use TYPO3\CMS\Core\PageTitle\AbstractPageTitleProvider;

/**
 * This class will add the page title for the job detail pages
 */
class GoogleForJobsPageTitleProvider extends AbstractPageTitleProvider
{
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}