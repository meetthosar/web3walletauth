import { loadStdlib } from "@reach-sh/stdlib";
import { ALGO_MyAlgoConnect as MyAlgoConnect } from "@reach-sh/stdlib";
const stdlib = loadStdlib();

stdlib.setWalletFallback(stdlib.walletFallback({
    providerEnv: 'TestNet', MyAlgoConnect }));

