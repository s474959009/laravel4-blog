<?php
$is_active = function ($name='') use ($activeCategory)
{
    if ($activeCategory == $name)
        return ' active';
    else
        return '';
}
?>
<div id="asidepart">
        <aside class='clearfix'>
            <div class="categorieslist">
                <p class="asidetitle " ><a class="{{ $is_active('all') }}" href="{{ route('home') }}">所有文章</a></p>
                  <ul>
                    @foreach($categories as $category)
                    <li>
                        <a  class="{{ $is_active($category->id) }}" href="{{ route('categoryArticles', $category->id) }}">{{ $category->name }}
                        <sup>{{{ Article::where('category_id', '=', $category->id)->count()}}}</sup>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </aside>
</div>
