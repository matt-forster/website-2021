// eslint-disable-next-line @typescript-eslint/no-unused-vars
import styles from './app.module.less';

function Title(props: React.PropsWithChildren<{title: string}>) {
  return <h1>{props.title}</h1>;
}


export function App() {
  return (
    <Title title='Matt Forster' />
  );
}

export default App;
