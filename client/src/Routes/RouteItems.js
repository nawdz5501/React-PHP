
import Home from '../pages/Home'
import About from '../pages/About'
import Posts from '../pages/Posts'
import PostDetail from '../components/Posts/PostDetail';
export const RouteItems = [{
    path: '/',
    component: <Home/>,
  }, {
    path: '/posts',
    component: <Posts/>
  }, {
    path: '/post/:post_id',
    component: <PostDetail/>,
  }, {
    path: '/about',
    component: <About/>,
  }, ];
