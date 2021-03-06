<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="row">
            <div class="col-md-11 col-sm-11 col-md-offset-1 col-sm-offset-1">
                <div class="navbar-header">
                    <div class="navbar-title">
                        <a class="navbar-brand" href="{{ url('/') }}">Jochen's blog</a>
                    </div>

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <div class="col-md-6 col-sm-6">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">首页</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle"
                                   data-toggle="dropdown"
                                   data-hover="dropdown"
                                   data-delay="300"
                                   data-close-others="true"
                                   aria-expanded="false">分类 <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="{{ route('categories.show', ['id' => 1]) }}">
                                            <i class="fa fa-fw fa-paper-plane-o"></i> 后端
                                        </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="{{ route('categories.show', ['id' => 2]) }}">
                                            <i class="fa fa-fw fa-database"></i> 数据库
                                        </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="{{ route('categories.show', ['id' => 3]) }}">
                                            <i class="fa fa-fw fa-server"></i> 服务器端
                                        </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="{{ route('categories.show', ['id' => 4]) }}">
                                            <i class="fa fa-fw fa-desktop"></i> 前端
                                        </a>
                                    </li>
                                    <li>
                                        <a tabindex="-1" href="{{ route('categories.show', ['id' => 5]) }}">
                                            <i class="fa fa-fw fa-book"></i> 其他
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="{{ route('tags.index') }}">标签</a></li>
                            <li><a href="{{ route('archive.index') }}">归档</a></li>
                            <li><a href="{{ route('about') }}">关于</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <form action="{{ route('search') }}" class="nav navbar-nav header-search">
                            <button class="btn btn-link">
                                <span class="sr-only">搜索</span>
                                <span class="glyphicon glyphicon-search"></span>
                            </button>
                            <input id="searchBox" name="query" type="text" class="form-control" placeholder="搜索文章" value="" required >
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>