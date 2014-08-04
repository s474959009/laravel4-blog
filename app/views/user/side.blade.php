<?php
$activeSide = function ($name='') use ($activeSide)
{
    if ($activeSide == $name)
        return ' active';
    else
        return '';
}
?>
<div id="asidepart">
        <aside class='clearfix'>
            <div class="categorieslist">
                  <ul>
                    <li>
                        <a  class="{{ $activeSide('articles') }}" href="{{ route('articles') }}">文章管理
                        <sup>{{{ Article::count()}}}</sup>
                        </a>
                    </li>
                     <li>
                        <a  class="{{ $activeSide('categories') }}" href="{{ route('categories') }}">分类管理
                        <sup>{{{ Category::count()}}}</sup>
                        </a>
                    </li>                   
                </ul>
            </div>
        </aside>
</div>