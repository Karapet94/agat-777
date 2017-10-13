<?php

if ( ! function_exists('akRequired'))
{
    function akRequired()
    {
        return '<span class="text-danger">*</span>';
    }
}

if ( ! function_exists('akAddJsFiles'))
{

    function akAddJsFiles($AdditionalJsFiles)
    {
        $result = '';
        foreach($AdditionalJsFiles as $AdditionalJsFile) {
            $result .= ' <script src="' . base_url(JS_PATH . '/' . $AdditionalJsFile . '.js') . '"></script>' . "\n";
        }
        return $result;
    }
}

if ( ! function_exists('akAddCssFiles'))
{

    function akAddCssFiles($AdditionalCssFiles)
    {
        $result = '';
        foreach($AdditionalCssFiles as $AdditionalCssFile) {
            $result .= ' <link rel="stylesheet" href="' . base_url(CSS_PATH . '/' . $AdditionalCssFile . '.css') . '">' . "\n";
        }
        return $result;
    }
}

if ( !function_exists('akBreadcrumbs'))
{

    function akBreadcrumbs($breadcrumbs)
    {
        $htmlResult = [];
        foreach ($breadcrumbs as $key => $breadcrumb) {
            if (is_numeric($key)) {
                $htmlResult[] = '<span>' . $breadcrumb . '</span>';
            } else {
                $htmlResult[] = '<a href="' . site_url($key) . '">' . $breadcrumb . '</a>';
            }
        }
        return implode(' - ', $htmlResult);
    }
}


if ( ! function_exists('akActiveMenu'))
{

    function akActiveMenu($uriSegment, $expected)
    {
        return $uriSegment == $expected ? 'active' : '';
    }
}

if ( ! function_exists('getPortfolioSlug'))
{

    function getPortfolioSlug($id)
    {
        $map = [
            ID_PORTFOLIO_ARARAT_MEDICAL_CENTER => SLUG_PORTFOLIO_ARARAT_MEDICAL_CENTER,
            ID_PORTFOLIO_HERATSU_MEDICAL_CENTER => SLUG_PORTFOLIO_HERATSU_MEDICAL_CENTER,
            ID_PORTFOLIO_INVESTIGATE_COMMITTEE => SLUG_PORTFOLIO_INVESTIGATE_COMMITTEE,
        ];
        return array_key_exists($id, $map) ? $map[$id] : '';
    }
}

