<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/article/1">Article 1</a></li>
    </ul>
</nav>

<h1>La page d'accueil de mon application</h1>


<div>Venez tester !!!</div>


<ul>
    @foreach($articles as $id => $nom)
        <li><a href="/article/{{ $id }}">{{ $nom }}</a></li>
    @endforeach
</ul>