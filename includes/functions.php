<?php
/**
 * Helper functions for the photography portfolio
 */

/**
 * Get URL for a page
 */
function get_page_url($page, $params = []) {
    $url = 'index.php?page=' . urlencode($page);
    foreach ($params as $key => $value) {
        $url .= '&' . urlencode($key) . '=' . urlencode($value);
    }
    return $url;
}

/**
 * Check if current page matches
 */
function is_active_page($page) {
    $current = isset($_GET['page']) ? $_GET['page'] : 'home';
    return $current === $page;
}

/**
 * Get category by ID
 */
function get_category_by_id($id) {
    global $portfolioCategories;
    foreach ($portfolioCategories as $category) {
        if ($category['id'] === $id) {
            return $category;
        }
    }
    return null;
}

/**
 * Get portfolio items by category
 */
function get_items_by_category($categoryId) {
    global $portfolioItems;
    return array_filter($portfolioItems, function($item) use ($categoryId) {
        return $item['categoryId'] === $categoryId;
    });
}

/**
 * Get portfolio item by ID
 */
function get_item_by_id($id) {
    global $portfolioItems;
    foreach ($portfolioItems as $item) {
        if ($item['id'] === $id) {
            return $item;
        }
    }
    return null;
}

/**
 * Escape HTML output
 */
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
?>
